<!DOCTYPE html>
<html lang="id" x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }" x-init="$watch('darkMode', v => localStorage.setItem('theme', v ? 'dark' : 'light'))" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- SEO Meta --}}
    <title>@yield('title', 'Rizqi Abdan Syakuron — IT Student & Web Developer')</title>
    <meta name="description" content="@yield('description', 'Portfolio profesional Rizqi Abdan Syakuron — Mahasiswa IT, Web Developer, AI Enthusiast. Laravel, React, Tailwind, Machine Learning.')">
    <meta name="keywords" content="Rizqi Abdan Syakuron, Web Developer, Laravel, React, AI, Machine Learning, Portfolio, Politeknik Caltex Riau">
    <meta name="author" content="Rizqi Abdan Syakuron">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Rizqi Abdan Syakuron — Portfolio')">
    <meta property="og:description" content="@yield('description', 'Portfolio profesional Rizqi Abdan Syakuron')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    {{-- Tailwind via CDN (replace with Vite build in production) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans:  ['Inter', 'sans-serif'],
                        space: ['Space Grotesk', 'sans-serif'],
                        mono:  ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        primary: {
                            50:  '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        accent: {
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                        },
                        surface: {
                            light: '#f8fafc',
                            dark:  '#0f0f1a',
                        }
                    },
                    animation: {
                        'float':      'float 6s ease-in-out infinite',
                        'glow':       'glow 2s ease-in-out infinite alternate',
                        'slide-up':   'slideUp 0.6s ease forwards',
                        'fade-in':    'fadeIn 0.8s ease forwards',
                        'spin-slow':  'spin 8s linear infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float:   { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-12px)' } },
                        glow:    { from: { boxShadow: '0 0 20px rgba(99,102,241,0.3)' }, to: { boxShadow: '0 0 40px rgba(99,102,241,0.7)' } },
                        slideUp: { from: { opacity: '0', transform: 'translateY(30px)' }, to: { opacity: '1', transform: 'translateY(0)' } },
                        fadeIn:  { from: { opacity: '0' }, to: { opacity: '1' } },
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                    },
                }
            }
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <style>
        /* Scroll progress bar */
        #scroll-progress {
            position: fixed; top: 0; left: 0; height: 3px; z-index: 9999;
            background: linear-gradient(90deg, #6366f1, #34d399);
            transition: width 0.1s linear;
        }

        /* Glassmorphism */
        .glass {
            background: rgba(255,255,255,0.07);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255,255,255,0.12);
        }
        .dark .glass {
            background: rgba(15,15,26,0.6);
            border: 1px solid rgba(255,255,255,0.08);
        }

        /* Reveal animation */
        .reveal { opacity: 0; transform: translateY(32px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #6366f1; border-radius: 3px; }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #34d399 50%, #818cf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Particle canvas */
        #particles-canvas { position: absolute; inset: 0; pointer-events: none; }

        /* Loading screen */
        #loading-screen {
            position: fixed; inset: 0; z-index: 99999;
            background: #0f0f1a;
            display: flex; align-items: center; justify-content: center;
            transition: opacity 0.5s ease;
        }
        .loader-ring {
            width: 56px; height: 56px;
            border: 3px solid rgba(99,102,241,0.2);
            border-top-color: #6366f1;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        /* Noise texture overlay */
        body::after {
            content: '';
            position: fixed; inset: 0; pointer-events: none; z-index: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.02'/%3E%3C/svg%3E");
            opacity: 0.4;
        }
    </style>
</head>
<body class="font-sans bg-white dark:bg-surface-dark text-gray-900 dark:text-gray-100 transition-colors duration-300 antialiased">

    {{-- Loading screen --}}
    <div id="loading-screen">
        <div class="text-center">
            <div class="loader-ring mx-auto mb-4"></div>
            <p class="text-primary-400 font-mono text-sm tracking-widest">LOADING...</p>
        </div>
    </div>

    {{-- Scroll progress --}}
    <div id="scroll-progress" style="width:0%"></div>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Back to top --}}
    <button id="back-to-top"
        onclick="window.scrollTo({top:0,behavior:'smooth'})"
        class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full bg-primary-600 hover:bg-primary-500 text-white shadow-lg shadow-primary-600/30 transition-all duration-300 flex items-center justify-center opacity-0 translate-y-4"
        aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
    // ── Loading screen ──────────────────────────────────────────
    window.addEventListener('load', () => {
        const ls = document.getElementById('loading-screen');
        ls.style.opacity = '0';
        setTimeout(() => ls.style.display = 'none', 500);
    });

    // ── Scroll progress ─────────────────────────────────────────
    window.addEventListener('scroll', () => {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        document.getElementById('scroll-progress').style.width = scrolled + '%';

        // Back to top button
        const btn = document.getElementById('back-to-top');
        if (window.scrollY > 400) {
            btn.classList.remove('opacity-0', 'translate-y-4');
            btn.classList.add('opacity-100', 'translate-y-0');
        } else {
            btn.classList.add('opacity-0', 'translate-y-4');
            btn.classList.remove('opacity-100', 'translate-y-0');
        }
    });

    // ── Reveal on scroll ────────────────────────────────────────
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), i * 80);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

    @stack('scripts')
</body>
</html>
