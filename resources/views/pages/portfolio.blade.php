@extends('layouts.app')
@section('title', 'Portfolio — Rizqi Abdan Syakuron')
@section('description', 'Portfolio project Rizqi Abdan Syakuron — Web Development, Animation, AI & Machine Learning projects.')

@section('content')

{{-- Page header --}}
<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-accent-500/10 to-transparent"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-accent-500/10 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">02. Work</p>
        <h1 class="text-4xl lg:text-5xl font-space font-bold text-gray-900 dark:text-white reveal">
            My <span class="gradient-text">Portfolio</span>
        </h1>
        <p class="text-gray-500 dark:text-gray-400 mt-3 max-w-xl reveal">
            Kumpulan project yang telah dibangun — dari web apps, animasi edukatif, hingga riset AI.
        </p>
    </div>
</section>

{{-- Filter tabs --}}
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8" x-data="{ filter: 'all' }">
    <div class="flex flex-wrap gap-2 reveal">
        @foreach(['all' => 'All Projects', 'web' => 'Web Dev', 'animation' => 'Animation', 'ai' => 'AI & ML'] as $key => $label)
        <button @click="filter = '{{ $key }}'"
                :class="filter === '{{ $key }}' ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/25' : 'glass border border-gray-300 dark:border-gray-600 text-gray-600 dark:text-gray-300 hover:border-primary-400'"
                class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200">
            {{ $label }}
        </button>
        @endforeach
    </div>

    {{-- Projects grid --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">

        {{-- Project 1 --}}
        <div class="reveal project-card group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-primary-400/50 hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 hover:-translate-y-1"
             x-show="filter === 'all' || filter === 'animation'">

            <div class="h-52 flex items-center justify-center relative overflow-hidden"
                 style="background: linear-gradient(135deg, #6366f110, #4f46e505)">
                <div class="text-center">
                    <div class="text-6xl mb-2">🎬</div>
                    <p class="text-xs text-gray-400 font-mono">Animation Project</p>
                </div>
                <div class="absolute top-3 left-3 flex gap-2">
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-primary-100 dark:bg-primary-900/40 text-primary-700 dark:text-primary-300">Animation</span>
                </div>
                {{-- Hover overlay --}}
                <div class="absolute inset-0 bg-primary-600/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
                    <a href="#" class="px-4 py-2 rounded-xl bg-white text-primary-700 text-sm font-medium hover:bg-gray-100 transition-colors">Demo</a>
                    <a href="#" class="px-4 py-2 rounded-xl glass border border-white/30 text-white text-sm font-medium hover:bg-white/10 transition-colors">GitHub</a>
                </div>
            </div>

            <div class="p-5">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                    Animasi Pengenalan Area Sektor LAPAS
                </h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4">
                    Project animasi edukatif yang dibuat untuk membantu pengenalan area sektor LAPAS secara visual dan interaktif agar informasi lebih mudah dipahami.
                </p>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Blender</span>
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Animation Design</span>
                </div>
            </div>
        </div>

        {{-- Project 2 --}}
        <div class="reveal project-card group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-accent-400/50 hover:shadow-xl hover:shadow-accent-500/10 transition-all duration-300 hover:-translate-y-1"
             x-show="filter === 'all' || filter === 'web'">

            <div class="h-52 flex items-center justify-center relative overflow-hidden"
                 style="background: linear-gradient(135deg, #10b98110, #05966905)">
                <div class="text-center">
                    <div class="text-6xl mb-2">🌐</div>
                    <p class="text-xs text-gray-400 font-mono">Web Development</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-accent-100 dark:bg-accent-900/40 text-accent-700 dark:text-accent-300">Web Dev</span>
                </div>
                <div class="absolute inset-0 bg-accent-600/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
                    <a href="#" class="px-4 py-2 rounded-xl bg-white text-accent-700 text-sm font-medium hover:bg-gray-100 transition-colors">Demo</a>
                    <a href="#" class="px-4 py-2 rounded-xl glass border border-white/30 text-white text-sm font-medium hover:bg-white/10 transition-colors">GitHub</a>
                </div>
            </div>

            <div class="p-5">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-accent-600 dark:group-hover:text-accent-400 transition-colors">
                    Modern Web Development Projects
                </h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4">
                    Mengembangkan berbagai website modern dengan fokus pada tampilan responsif, pengalaman pengguna yang optimal, dan performa aplikasi yang tinggi.
                </p>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Laravel</span>
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">React</span>
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Tailwind CSS</span>
                </div>
            </div>
        </div>

        {{-- Project 3 --}}
        <div class="reveal project-card group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-yellow-400/50 hover:shadow-xl hover:shadow-yellow-500/10 transition-all duration-300 hover:-translate-y-1"
             x-show="filter === 'all' || filter === 'ai'">

            <div class="h-52 flex items-center justify-center relative overflow-hidden"
                 style="background: linear-gradient(135deg, #f59e0b10, #d9770605)">
                <div class="text-center">
                    <div class="text-6xl mb-2">🤖</div>
                    <p class="text-xs text-gray-400 font-mono">AI & Machine Learning</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 dark:bg-yellow-900/40 text-yellow-700 dark:text-yellow-300">AI / ML</span>
                </div>
                <div class="absolute inset-0 bg-yellow-600/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
                    <a href="#" class="px-4 py-2 rounded-xl bg-white text-yellow-700 text-sm font-medium hover:bg-gray-100 transition-colors">Demo</a>
                    <a href="#" class="px-4 py-2 rounded-xl glass border border-white/30 text-white text-sm font-medium hover:bg-white/10 transition-colors">GitHub</a>
                </div>
            </div>

            <div class="p-5">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors">
                    Artificial Intelligence & Machine Learning
                </h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4">
                    Membangun dan mempelajari berbagai implementasi AI, machine learning, dan deep learning untuk analisis data, automasi, dan solusi teknologi modern.
                </p>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Python</span>
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Machine Learning</span>
                    <span class="px-2 py-0.5 rounded-md text-xs bg-gray-100 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 font-mono">Deep Learning</span>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="py-16"></div>

@endsection
