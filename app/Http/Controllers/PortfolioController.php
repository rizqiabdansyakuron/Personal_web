<?php

namespace App\Http\Controllers;

use App\Services\SupabaseService;

class PortfolioController extends Controller
{
    public function __construct(protected SupabaseService $supabase) {}

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function portfolio()
    {
        // When Supabase is configured, projects can be fetched dynamically.
        // For now, data is passed as static array.
        $projects = $this->getProjects();
        return view('pages.portfolio', compact('projects'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    private function getProjects(): array
    {
        // Try Supabase first; fall back to static data
        if ($this->supabase->isConfigured()) {
            $remote = $this->supabase->select('projects', ['select' => '*', 'order' => 'order.asc']);
            if ($remote) return $remote;
        }

        return [
            [
                'title'       => 'Animasi Pengenalan Area Sektor LAPAS',
                'description' => 'Project animasi edukatif yang dibuat untuk membantu pengenalan area sektor LAPAS secara visual dan interaktif agar informasi lebih mudah dipahami.',
                'category'    => 'Animation Project',
                'technologies'=> ['Blender', 'Animation Design'],
                'image'       => null,
                'demo_url'    => '#',
                'github_url'  => '#',
            ],
            [
                'title'       => 'Modern Web Development Projects',
                'description' => 'Mengembangkan berbagai website modern dengan fokus pada tampilan responsif, pengalaman pengguna, dan performa aplikasi.',
                'category'    => 'Web Development',
                'technologies'=> ['Laravel', 'React', 'Tailwind CSS'],
                'image'       => null,
                'demo_url'    => '#',
                'github_url'  => '#',
            ],
            [
                'title'       => 'Artificial Intelligence & Machine Learning',
                'description' => 'Membangun dan mempelajari berbagai implementasi AI, machine learning, dan deep learning untuk analisis data, automasi, dan solusi teknologi modern.',
                'category'    => 'AI & Machine Learning',
                'technologies'=> ['Python', 'Machine Learning', 'Deep Learning'],
                'image'       => null,
                'demo_url'    => '#',
                'github_url'  => '#',
            ],
        ];
    }
}
