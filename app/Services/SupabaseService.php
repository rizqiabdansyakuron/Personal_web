<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SupabaseService
{
    protected string $url;
    protected string $anonKey;
    protected string $serviceRoleKey;

    public function __construct()
    {
        $this->url = config('supabase.url');
        $this->anonKey = config('supabase.anon_key');
        $this->serviceRoleKey = config('supabase.service_role_key');
    }

    protected function tableUrl(string $table): string
    {
        return rtrim($this->url, '/') . '/rest/v1/' . $table;
    }

    protected function headers(bool $useServiceRole = false): array
    {
        $key = $useServiceRole ? $this->serviceRoleKey : $this->anonKey;

        return [
            'apikey' => $key,
            'Authorization' => 'Bearer ' . $key,
            'Content-Type' => 'application/json',
            'Prefer' => 'return=representation',
        ];
    }

    public function insert(string $table, array $data): ?array
    {
        try {
            $response = Http::withHeaders($this->headers(true)) // 🔥 WAJIB service role
                ->post($this->tableUrl($table), $data);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('Supabase insert failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        } catch (\Throwable $e) {
            Log::error('Supabase exception: ' . $e->getMessage());
            return null;
        }
    }

    public function saveContactMessage(array $data): bool
    {
        $result = $this->insert('contact_messages', [
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);

        return $result !== null;
    }
}
