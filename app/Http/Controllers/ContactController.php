<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SupabaseService;

class ContactController extends Controller
{
    public function __construct(protected SupabaseService $supabase) {}

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'required|string|max:2000',
        ]);

        $saved = $this->supabase->saveContactMessage($validated);

        if (!$saved) {
            return back()->with('error', 'Gagal mengirim pesan 😢');
        }

        return back()->with('success', 'Pesan berhasil dikirim 🚀');
    }
}
