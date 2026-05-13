@extends('layouts.app')
@section('title', 'About — Rizqi Abdan Syakuron')
@section('description', 'Tentang Rizqi Abdan Syakuron — Mahasiswa IT Politeknik Caltex Riau, background pendidikan, skills, dan perjalanan karir.')

@section('content')

{{-- Page header --}}
<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-primary-900/20 to-transparent dark:from-primary-900/30"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-primary-600/10 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">01. About</p>
        <h1 class="text-4xl lg:text-5xl font-space font-bold text-gray-900 dark:text-white reveal">
            About <span class="gradient-text">Me</span>
        </h1>
    </div>
</section>

{{-- ══════ BIO ══════ --}}
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">

            {{-- Avatar --}}
            <div class="flex justify-center reveal">
                <div class="relative">
                    <div class="w-64 h-64 rounded-3xl overflow-hidden"
                         style="background: linear-gradient(135deg, #4f46e5, #0f0f1a 60%, #059669);">
                        <div class="h-full flex flex-col items-center justify-center text-white gap-2">
                            <div class="w-20 h-20 rounded-full bg-white/10 border-2 border-white/20 flex items-center justify-center">
                                <span class="text-3xl font-bold font-space">R</span>
                            </div>
                            <p class="text-sm text-white/60 font-mono">Photo Placeholder</p>
                        </div>
                    </div>

                    {{-- Info cards --}}
                    <div class="absolute -right-4 top-6 glass px-3 py-2 rounded-xl border border-primary-500/30 shadow-lg">
                        <p class="text-xs text-primary-400 font-mono">Pekanbaru, Riau 🇮🇩</p>
                    </div>
                    <div class="absolute -left-4 bottom-6 glass px-3 py-2 rounded-xl border border-accent-500/30 shadow-lg">
                        <p class="text-xs text-accent-400 font-mono">Open to Work ✅</p>
                    </div>
                </div>
            </div>

            {{-- Bio text --}}
            <div class="reveal" style="transition-delay:0.1s">
                <h2 class="text-2xl font-space font-bold text-gray-900 dark:text-white mb-1">Rizqi Abdan Syakuron</h2>
                <p class="text-primary-500 font-mono text-sm mb-6">IT Student · Web Developer · AI Enthusiast</p>

                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                    Saya merupakan mahasiswa <span class="text-primary-500 font-medium">Information Technology</span> di
                    Politeknik Caltex Riau yang aktif mempelajari pengembangan website, kecerdasan buatan, machine learning,
                    serta teknologi digital modern.
                </p>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                    Saya senang membangun project yang tidak hanya menarik secara visual tetapi juga memiliki
                    <span class="text-accent-500 font-medium">manfaat nyata</span>. Dari web development, animasi edukatif,
                    hingga riset AI — semua dilakukan dengan passion dan semangat belajar yang tinggi.
                </p>

                {{-- Quick info --}}
                <div class="grid grid-cols-2 gap-3 mb-6">
                    @foreach([
                        ['🎓', 'Pendidikan',    'Politeknik Caltex Riau'],
                        ['📍', 'Lokasi',        'Pekanbaru, Riau'],
                        ['💼', 'Status',        'Mahasiswa + Freelance'],
                        ['🎯', 'Focus',         'Web Dev & AI'],
                    ] as [$icon, $label, $value])
                    <div class="p-3 rounded-xl bg-gray-50 dark:bg-gray-800/40 border border-gray-200/60 dark:border-gray-700/60">
                        <p class="text-xs text-gray-400 uppercase tracking-wider mb-0.5">{{ $label }}</p>
                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200">{{ $icon }} {{ $value }}</p>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary-600 hover:bg-primary-500 text-white font-medium shadow-lg shadow-primary-600/25 transition-all duration-200 hover:-translate-y-0.5">
                    Let's Connect
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ══════ EDUCATION TIMELINE ══════ --}}
<section class="py-20 bg-gray-50 dark:bg-gray-900/30">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">Background</p>
            <h2 class="text-3xl font-space font-bold text-gray-900 dark:text-white reveal">
                Education <span class="gradient-text">Timeline</span>
            </h2>
        </div>

        <div class="relative">
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-primary-500 via-accent-500 to-transparent hidden sm:block"></div>

            <div class="space-y-6">
                @foreach([
                    ['🏫', 'SD 001 Perawang', 'Desa Tualang', 'Sekolah Dasar', 'Fondasi pendidikan dasar di Desa Tualang, Perawang.', '#6366f1'],
                    ['🕌', 'MTs Pondok Pesantren Dar El Hikmah', 'Pekanbaru, Riau', 'Madrasah Tsanawiyah', 'Menempuh pendidikan di lingkungan pesantren dengan nilai-nilai islami dan akademik.', '#8b5cf6'],
                    ['🎓', 'SMK Pondok Pesantren Dar El Hikmah', 'Pekanbaru, Riau', 'Sekolah Menengah Kejuruan', 'Memperdalam ilmu kejuruan di lingkungan pesantren Dar El Hikmah Pekanbaru.', '#06b6d4'],
                    ['🏛️', 'Politeknik Caltex Riau', 'Pekanbaru, Riau · 2023 – 2026', 'S.Tr. Information Technology', 'Kuliah di jurusan Information Technology dengan fokus pada pengembangan software, AI, dan teknologi digital modern. Aktif mengikuti project dan organisasi.', '#10b981'],
                ] as [$icon, $school, $location, $level, $desc, $color])
                <div class="reveal flex gap-6">
                    {{-- Icon --}}
                    <div class="flex-shrink-0 w-16 h-16 rounded-2xl flex items-center justify-center text-2xl shadow-lg relative z-10" style="background:{{ $color }}15; border:1px solid {{ $color }}30;">
                        {{ $icon }}
                    </div>

                    {{-- Card --}}
                    <div class="flex-1 p-5 rounded-2xl bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-primary-400/40 transition-colors">
                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-1 mb-2">
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white">{{ $school }}</h3>
                                <p class="text-xs text-gray-400">📍 {{ $location }}</p>
                            </div>
                            <span class="inline-block px-2.5 py-1 rounded-full text-xs font-medium whitespace-nowrap" style="background:{{ $color }}15; color:{{ $color }}">{{ $level }}</span>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ $desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ══════ SKILLS ══════ --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">Expertise</p>
            <h2 class="text-3xl font-space font-bold text-gray-900 dark:text-white reveal">
                Skills & <span class="gradient-text">Technologies</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @foreach([
                ['Web Development', [
                    ['Laravel', 88, '#FF2D20'],
                    ['PHP',     85, '#777BB4'],
                    ['React',   75, '#61DAFB'],
                    ['JavaScript', 80, '#F7DF1E'],
                    ['Tailwind CSS', 90, '#38BDF8'],
                ]],
                ['Data & AI', [
                    ['Python',             70, '#3776AB'],
                    ['Machine Learning',   65, '#10b981'],
                    ['Deep Learning',      55, '#8b5cf6'],
                    ['AI Integration',     60, '#f59e0b'],
                ]],
                ['Database & BaaS', [
                    ['MySQL',    80, '#4479A1'],
                    ['Supabase', 70, '#3ECF8E'],
                    ['API Design', 78, '#6366f1'],
                ]],
                ['Design & Tools', [
                    ['UI/UX Design', 72, '#ec4899'],
                    ['Figma',        68, '#a855f7'],
                    ['Blender',      60, '#f97316'],
                    ['Git & GitHub', 85, '#333'],
                ]],
            ] as [$category, $skills])
            <div class="reveal p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/40 border border-gray-200/60 dark:border-gray-700/60">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-5 font-space">{{ $category }}</h3>
                <div class="space-y-4">
                    @foreach($skills as [$skill, $pct, $color])
                    <div>
                        <div class="flex justify-between mb-1.5">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ $skill }}</span>
                            <span class="text-xs font-mono text-gray-400">{{ $pct }}%</span>
                        </div>
                        <div class="h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="skill-bar h-full rounded-full transition-all duration-1000"
                                 data-width="{{ $pct }}"
                                 style="width:0%; background:{{ $color }}; box-shadow:0 0 8px {{ $color }}60"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
// Animate skill bars when visible
const barObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.querySelectorAll('.skill-bar').forEach((bar, i) => {
                setTimeout(() => { bar.style.width = bar.dataset.width + '%'; }, i * 80);
            });
            barObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.2 });
document.querySelectorAll('.skill-bar').forEach(bar => {
    barObserver.observe(bar.closest('div[class*="rounded"]') || bar.parentElement.parentElement.parentElement);
});
</script>
@endpush
