@extends('layouts.app')

@section('title', 'Rizqi Abdan Syakuron — IT Student, Web Developer & AI Enthusiast')
@section('description', 'Portfolio Rizqi Abdan Syakuron — Mahasiswa IT Politeknik Caltex Riau, Web Developer Laravel & React, AI Enthusiast.')

@section('content')

{{-- ══════════════════════════════════════════════════════════
     HERO SECTION
══════════════════════════════════════════════════════════ --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">

    {{-- Animated gradient background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-primary-900/40 to-slate-900 dark:from-surface-dark dark:via-primary-900/30 dark:to-surface-dark"></div>

    {{-- Grid overlay --}}
    <div class="absolute inset-0 opacity-20"
         style="background-image: linear-gradient(rgba(99,102,241,0.15) 1px, transparent 1px), linear-gradient(90deg, rgba(99,102,241,0.15) 1px, transparent 1px); background-size: 50px 50px; mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 100%);"></div>

    {{-- Glow orbs --}}
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-600/20 rounded-full blur-3xl animate-pulse-slow pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-accent-500/15 rounded-full blur-3xl animate-pulse-slow pointer-events-none" style="animation-delay:1.5s"></div>

    {{-- Particle canvas --}}
    <canvas id="particles-canvas"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left: text --}}
            <div>
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass border border-primary-500/30 text-primary-400 text-sm font-medium mb-6 reveal">
                    <span class="w-2 h-2 rounded-full bg-accent-400 animate-pulse"></span>
                    Available for Projects
                </div>

                {{-- Name --}}
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-space font-bold text-white leading-tight mb-3 reveal" style="transition-delay:0.1s">
                    Rizqi Abdan
                    <br>
                    <span class="gradient-text">Syakuron</span>
                </h1>

                {{-- Subtitle with typewriter --}}
                <p class="text-lg text-gray-300 font-mono mb-6 reveal" style="transition-delay:0.2s" id="typewriter"></p>

                {{-- Description --}}
                <p class="text-gray-400 leading-relaxed mb-8 max-w-lg reveal" style="transition-delay:0.3s">
                    Mahasiswa IT yang memiliki ketertarikan besar pada pengembangan web, <span class="text-primary-400">artificial intelligence</span>,
                    machine learning, dan teknologi digital modern. Berpengalaman dalam mengembangkan berbagai project kreatif
                    mulai dari website, animasi edukasi, hingga <span class="text-accent-400">sistem berbasis AI</span>.
                </p>

                {{-- CTA --}}
                <div class="flex flex-wrap gap-4 reveal" style="transition-delay:0.4s">
                    <a href="{{ route('portfolio') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary-600 hover:bg-primary-500 text-white font-medium shadow-lg shadow-primary-600/30 hover:shadow-primary-500/40 transition-all duration-200 hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        View Portfolio
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-xl glass border border-gray-600 hover:border-primary-500 text-gray-300 hover:text-white font-medium transition-all duration-200 hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Me
                    </a>
                </div>

                {{-- Stats --}}
                <div class="flex gap-8 mt-10 reveal" style="transition-delay:0.5s">
                    @foreach([['3+', 'Years Learning'], ['10+', 'Projects Built'], ['5+', 'Technologies']] as [$n, $l])
                    <div>
                        <div class="text-2xl font-bold text-white font-space">{{ $n }}</div>
                        <div class="text-xs text-gray-500 uppercase tracking-wider">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: avatar card --}}
            <div class="flex justify-center lg:justify-end reveal" style="transition-delay:0.3s">
                <div class="relative">
                    {{-- Spinning ring --}}
                    <div class="absolute -inset-4 rounded-full border border-primary-500/20 animate-spin-slow"></div>
                    <div class="absolute -inset-8 rounded-full border border-accent-500/10 animate-spin-slow" style="animation-direction:reverse;animation-duration:12s"></div>

                    {{-- Avatar --}}
                    <div class="relative w-64 h-64 lg:w-80 lg:h-80 rounded-3xl overflow-hidden animate-float"
                         style="background: linear-gradient(135deg, #4f46e5 0%, #0f0f1a 50%, #059669 100%);">
                        {{-- Placeholder avatar --}}
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                            <div class="w-24 h-24 rounded-full bg-white/10 border-2 border-white/20 flex items-center justify-center mb-3">
                                <span class="text-4xl font-bold font-space">R</span>
                            </div>
                            <p class="text-sm text-white/70 font-mono">Rizqi.jpg</p>
                            <p class="text-xs text-white/40 mt-1">Replace with your photo</p>
                        </div>

                        {{-- Glass overlay bottom --}}
                        <div class="absolute bottom-0 left-0 right-0 p-4 glass">
                            <p class="text-white font-semibold text-sm">Rizqi Abdan Syakuron</p>
                            <p class="text-primary-300 text-xs font-mono">IT Student @ PCR</p>
                        </div>
                    </div>

                    {{-- Floating badges --}}
                    <div class="absolute -top-3 -right-3 glass px-3 py-1.5 rounded-xl border border-primary-500/30 animate-float" style="animation-delay:1s">
                        <span class="text-xs text-primary-300 font-mono">Laravel 12</span>
                    </div>
                    <div class="absolute -bottom-3 -left-3 glass px-3 py-1.5 rounded-xl border border-accent-500/30 animate-float" style="animation-delay:2s">
                        <span class="text-xs text-accent-400 font-mono">AI Enthusiast</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-500 animate-bounce">
            <span class="text-xs font-mono uppercase tracking-widest">Scroll</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     SKILLS QUICK PREVIEW
══════════════════════════════════════════════════════════ --}}
<section class="py-20 bg-gray-50 dark:bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">Tech Stack</p>
            <h2 class="text-3xl lg:text-4xl font-space font-bold text-gray-900 dark:text-white reveal">My <span class="gradient-text">Arsenal</span></h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach([
                ['Laravel',         '#FF2D20', 'M', 'Backend Framework'],
                ['PHP',             '#777BB4', 'P', 'Server-side'],
                ['JavaScript',      '#F7DF1E', 'J', 'Frontend Logic'],
                ['React',           '#61DAFB', 'R', 'UI Framework'],
                ['Tailwind CSS',    '#38BDF8', 'T', 'Styling'],
                ['Python',          '#3776AB', 'Py', 'AI & Scripts'],
                ['MySQL',           '#4479A1', 'DB', 'Database'],
                ['Supabase',        '#3ECF8E', 'S', 'BaaS'],
            ] as [$name, $color, $icon, $desc])
            <div class="reveal group p-5 rounded-2xl bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-primary-400/50 hover:shadow-lg hover:shadow-primary-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-white text-sm mb-3" style="background: {{ $color }}20; color: {{ $color }}; border: 1px solid {{ $color }}40;">
                    {{ $icon }}
                </div>
                <p class="font-semibold text-gray-900 dark:text-white text-sm">{{ $name }}</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-8 reveal">
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 hover:underline text-sm font-medium">
                View all skills →
            </a>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     PORTFOLIO PREVIEW
══════════════════════════════════════════════════════════ --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-end justify-between mb-14">
            <div>
                <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">Featured Work</p>
                <h2 class="text-3xl lg:text-4xl font-space font-bold text-gray-900 dark:text-white reveal">
                    Recent <span class="gradient-text">Projects</span>
                </h2>
            </div>
            <a href="{{ route('portfolio') }}" class="hidden sm:inline-flex items-center gap-2 text-sm text-gray-500 hover:text-primary-600 dark:hover:text-primary-400 transition-colors reveal">
                View all <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['Animasi Pengenalan Area Sektor LAPAS', 'Project animasi edukatif visual dan interaktif untuk pengenalan area sektor LAPAS.', 'Animation', ['Blender', 'Animation Design'], '#6366f1'],
                ['Modern Web Development', 'Berbagai website modern responsif dengan UX optimal dan performa tinggi.', 'Web Dev', ['Laravel', 'React', 'Tailwind'], '#10b981'],
                ['AI & Machine Learning', 'Implementasi AI, machine learning, dan deep learning untuk solusi teknologi modern.', 'AI / ML', ['Python', 'ML', 'Deep Learning'], '#f59e0b'],
            ] as [$title, $desc, $cat, $techs, $accent])
            <div class="reveal group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-primary-400/50 hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 hover:-translate-y-1">

                {{-- Thumbnail placeholder --}}
                <div class="h-48 flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, {{ $accent }}20, {{ $accent }}05)">
                    <div class="text-5xl font-bold opacity-10" style="color:{{ $accent }}">{{ substr($title,0,1) }}</div>
                    <div class="absolute top-3 right-3">
                        <span class="px-2.5 py-1 rounded-full text-xs font-medium" style="background:{{ $accent }}20; color:{{ $accent }}">{{ $cat }}</span>
                    </div>
                </div>

                <div class="p-5">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2 line-clamp-2 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">{{ $title }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4 line-clamp-2">{{ $desc }}</p>

                    <div class="flex flex-wrap gap-1.5 mb-4">
                        @foreach($techs as $tech)
                        <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">{{ $tech }}</span>
                        @endforeach
                    </div>

                    <div class="flex gap-3">
                        <a href="#" class="flex-1 text-center py-2 rounded-xl text-xs font-medium bg-primary-600 hover:bg-primary-500 text-white transition-colors">Live Demo</a>
                        <a href="#" class="px-3 py-2 rounded-xl text-xs font-medium glass border border-gray-300 dark:border-gray-600 text-gray-600 dark:text-gray-300 hover:border-primary-400 transition-colors">GitHub</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     JOURNEY TIMELINE (MINI)
══════════════════════════════════════════════════════════ --}}
<section class="py-20 bg-gray-50 dark:bg-gray-900/30">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">My Path</p>
            <h2 class="text-3xl font-space font-bold text-gray-900 dark:text-white reveal">The <span class="gradient-text">Journey</span></h2>
        </div>

        <div class="relative">
            {{-- Vertical line --}}
            <div class="absolute left-6 top-0 bottom-0 w-px bg-gradient-to-b from-primary-500/50 via-accent-500/30 to-transparent"></div>

            <div class="space-y-8">
                @foreach([
                    ['Web Development',          '2022', 'Memulai perjalanan web development dengan HTML, CSS, dan JavaScript dasar.', '#6366f1'],
                    ['Laravel & Backend',         '2023', 'Mendalami Laravel framework, REST API, dan pengembangan backend modern.', '#8b5cf6'],
                    ['UI/UX Exploration',         '2023', 'Belajar prinsip desain UI/UX dan mulai menggunakan Tailwind CSS & Figma.', '#06b6d4'],
                    ['AI Research & Learning',    '2024', 'Mulai eksplorasi Machine Learning, Deep Learning, dan implementasi AI dengan Python.', '#10b981'],
                    ['Animation & Multimedia',    '2024', 'Menyelesaikan project animasi edukatif menggunakan Blender untuk LAPAS.', '#f59e0b'],
                    ['Full-Stack & Integration',  '2025', 'Mengintegrasikan frontend-backend dengan Supabase, React, dan teknologi modern.', '#ef4444'],
                ] as [$title, $year, $desc, $color])
                <div class="reveal relative pl-16">
                    {{-- Dot --}}
                    <div class="absolute left-4 top-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-gray-800 shadow-lg" style="background:{{ $color }}; transform:translateX(-50%)"></div>

                    <div class="p-4 rounded-2xl bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-primary-400/40 transition-colors">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white text-sm">{{ $title }}</h3>
                            <span class="text-xs font-mono px-2 py-0.5 rounded-full" style="background:{{ $color }}20; color:{{ $color }}">{{ $year }}</span>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ $desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     CTA BAND
══════════════════════════════════════════════════════════ --}}
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="relative rounded-3xl overflow-hidden p-12 reveal"
             style="background: linear-gradient(135deg, #4f46e5 0%, #312e81 50%, #059669 100%);">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 30px 30px;"></div>
            <div class="relative">
                <h2 class="text-3xl lg:text-4xl font-space font-bold text-white mb-4">Let's Build Something <br><span class="text-accent-300">Amazing Together</span></h2>
                <p class="text-indigo-200 mb-8 max-w-lg mx-auto">
                    Punya project menarik? Butuh web developer atau collaborator? Jangan ragu untuk menghubungi saya!
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-white text-primary-700 font-semibold hover:bg-gray-50 shadow-xl transition-all duration-200 hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Hubungi Saya
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
// ── Typewriter effect ────────────────────────────────────────
const texts = [
    'Information Technology Student',
    'Web Developer',
    'Laravel Enthusiast',
    'AI & ML Explorer',
    'UI/UX Designer',
];
let ti = 0, ci = 0, deleting = false;
const el = document.getElementById('typewriter');

function type() {
    const current = texts[ti];
    if (!deleting) {
        el.textContent = '> ' + current.slice(0, ++ci) + '_';
        if (ci === current.length) { deleting = true; setTimeout(type, 1800); return; }
    } else {
        el.textContent = '> ' + current.slice(0, --ci) + '_';
        if (ci === 0) { deleting = false; ti = (ti + 1) % texts.length; }
    }
    setTimeout(type, deleting ? 40 : 80);
}
setTimeout(type, 800);

// ── Particles ────────────────────────────────────────────────
const canvas = document.getElementById('particles-canvas');
const ctx = canvas.getContext('2d');
let particles = [];

function resize() {
    canvas.width  = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;
}
resize();
window.addEventListener('resize', resize);

for (let i = 0; i < 60; i++) {
    particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        r: Math.random() * 1.5 + 0.5,
        vx: (Math.random() - 0.5) * 0.3,
        vy: (Math.random() - 0.5) * 0.3,
        alpha: Math.random() * 0.5 + 0.1,
    });
}

function drawParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles.forEach(p => {
        p.x += p.vx; p.y += p.vy;
        if (p.x < 0 || p.x > canvas.width)  p.vx *= -1;
        if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(99,102,241,${p.alpha})`;
        ctx.fill();
    });
    // Draw connections
    particles.forEach((a, i) => {
        particles.slice(i+1).forEach(b => {
            const d = Math.hypot(a.x-b.x, a.y-b.y);
            if (d < 100) {
                ctx.beginPath();
                ctx.moveTo(a.x, a.y);
                ctx.lineTo(b.x, b.y);
                ctx.strokeStyle = `rgba(99,102,241,${0.08*(1-d/100)})`;
                ctx.stroke();
            }
        });
    });
    requestAnimationFrame(drawParticles);
}
drawParticles();
</script>
@endpush
