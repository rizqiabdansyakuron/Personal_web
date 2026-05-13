@extends('layouts.app')
@section('title', 'Contact — Rizqi Abdan Syakuron')
@section('description', 'Hubungi Rizqi Abdan Syakuron untuk kolaborasi, project, atau sekadar menyapa.')

@section('content')

{{-- Page header --}}
<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-primary-900/20 to-transparent"></div>
    <div class="absolute top-20 right-20 w-64 h-64 bg-primary-600/10 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <p class="text-xs font-mono text-primary-500 uppercase tracking-widest mb-2 reveal">04. Contact</p>
        <h1 class="text-4xl lg:text-5xl font-space font-bold text-gray-900 dark:text-white reveal">
            Get In <span class="gradient-text">Touch</span>
        </h1>
        <p class="text-gray-500 dark:text-gray-400 mt-3 max-w-xl reveal">
            Punya ide project, pertanyaan, atau sekadar mau ngobrol tentang teknologi? Jangan ragu untuk menghubungi saya!
        </p>
    </div>
</section>

<section class="py-12 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">

            {{-- Contact info sidebar --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Info cards --}}
                @foreach([
                    ['📱', 'WhatsApp',    'wa.me/62xxxx',     '+62 xxx-xxxx-xxxx (Placeholder)',  '#25D366'],
                    ['📸', 'Instagram',   '#',                '@rizqi.dev (Placeholder)',          '#E4405F'],
                    ['💻', 'GitHub',      '#',                'github.com/rizqi (Placeholder)',    '#333333'],
                    ['🔗', 'LinkedIn',    '#',                'linkedin.com/in/rizqi (Placeholder)','#0A66C2'],
                ] as [$icon, $platform, $link, $handle, $color])
                <div class="reveal group flex items-center gap-4 p-4 rounded-2xl bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 hover:border-primary-400/40 transition-all duration-200 hover:-translate-x-1">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl flex-shrink-0" style="background:{{ $color }}15;">
                        {{ $icon }}
                    </div>
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white text-sm">{{ $platform }}</p>
                        <a href="{{ $link }}" class="text-xs text-gray-400 hover:text-primary-500 transition-colors font-mono">{{ $handle }}</a>
                    </div>
                </div>
                @endforeach

                {{-- Availability card --}}
                <div class="reveal p-5 rounded-2xl bg-gradient-to-br from-primary-600 to-primary-800 text-white shadow-lg shadow-primary-600/20">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 rounded-full bg-accent-400 animate-pulse"></span>
                        <span class="text-sm font-medium">Available for Work</span>
                    </div>
                    <p class="text-primary-200 text-xs leading-relaxed">
                        Saat ini saya open untuk freelance project, kolaborasi, dan internship opportunities.
                    </p>
                </div>
            </div>

            {{-- Contact form --}}
            <div class="lg:col-span-3 reveal">
                <div class="p-8 rounded-3xl bg-white dark:bg-gray-800/50 border border-gray-200/60 dark:border-gray-700/60 shadow-xl shadow-gray-200/30 dark:shadow-black/10">

                    @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-accent-50 dark:bg-accent-900/20 border border-accent-200 dark:border-accent-700/40 text-accent-700 dark:text-accent-300 text-sm flex items-center gap-2">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ session('success') }}
                    </div>
                    @endif

                    <h2 class="text-xl font-space font-bold text-gray-900 dark:text-white mb-1">Kirim Pesan</h2>
                    <p class="text-sm text-gray-400 mb-6">Semua field wajib diisi. Akan dibalas dalam 24 jam. 🚀</p>

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5" x-data="{ loading: false }" @submit="loading = true">
                        @csrf

                        {{-- Name --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5" for="name">
                                Nama Lengkap <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                   placeholder="Masukkan nama lengkap kamu"
                                   class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700/50 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-500/50 focus:border-primary-400 transition-all text-sm"
                                   required>
                            @error('name')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5" for="email">
                                Email Address <span class="text-red-400">*</span>
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   placeholder="email@kamu.com"
                                   class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700/50 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-500/50 focus:border-primary-400 transition-all text-sm"
                                   required>
                            @error('email')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Message --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5" for="message">
                                Pesan <span class="text-red-400">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5"
                                      placeholder="Ceritakan project atau pertanyaan kamu di sini..."
                                      class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700/50 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-500/50 focus:border-primary-400 transition-all text-sm resize-none"
                                      required>{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                        </div>

                        {{-- Submit --}}
                        <button type="submit"
                                :disabled="loading"
                                class="w-full flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-primary-600 hover:bg-primary-500 disabled:opacity-60 text-white font-medium shadow-lg shadow-primary-600/25 transition-all duration-200 hover:-translate-y-0.5 text-sm">
                            <span x-show="!loading">Kirim Pesan 🚀</span>
                            <span x-show="loading" class="flex items-center gap-2">
                                <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                                </svg>
                                Mengirim...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
