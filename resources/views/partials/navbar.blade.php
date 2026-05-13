<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar"
     x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })">

    <div :class="scrolled ? 'glass shadow-lg shadow-black/10' : 'bg-transparent'"
         class="transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-18">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-primary-500/30 group-hover:shadow-primary-500/50 transition-shadow">
                        R
                    </div>
                    <span class="font-space font-700 text-gray-900 dark:text-white text-sm tracking-wide hidden sm:block">
                        Rizqi<span class="text-primary-500">.</span>dev
                    </span>
                </a>

                {{-- Desktop nav links --}}
                <div class="hidden md:flex items-center gap-1">
                    @foreach([
                        ['Home',      route('home')],
                        ['About',     route('about')],
                        ['Portfolio', route('portfolio')],
                        ['Contact',   route('contact')],
                    ] as [$label, $href])
                    <a href="{{ $href }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 hover:bg-primary-50 dark:hover:bg-primary-900/20 transition-all duration-200 {{ request()->url() === $href ? 'text-primary-600 dark:text-primary-400 bg-primary-50 dark:bg-primary-900/20' : '' }}">
                        {{ $label }}
                    </a>
                    @endforeach
                </div>

                {{-- Right side: theme toggle + hire me --}}
                <div class="flex items-center gap-3">
                    {{-- Dark mode toggle --}}
                    <button @click="darkMode = !darkMode"
                            class="w-9 h-9 rounded-lg flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                            aria-label="Toggle dark mode">
                        <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </button>

                    {{-- Hire me button --}}
                    <a href="{{ route('contact') }}"
                       class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-primary-600 hover:bg-primary-500 text-white text-sm font-medium shadow-lg shadow-primary-600/25 hover:shadow-primary-500/35 transition-all duration-200 hover:-translate-y-0.5">
                        <span>Hire Me</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>

                    {{-- Mobile menu btn --}}
                    <button @click="open = !open"
                            class="md:hidden w-9 h-9 rounded-lg flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="md:hidden border-t border-gray-200/50 dark:border-gray-700/50 px-4 py-3 space-y-1">
            @foreach([
                ['Home',      route('home')],
                ['About',     route('about')],
                ['Portfolio', route('portfolio')],
                ['Contact',   route('contact')],
            ] as [$label, $href])
            <a href="{{ $href }}" @click="open = false"
               class="block px-4 py-2.5 rounded-xl text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 hover:bg-primary-50 dark:hover:bg-primary-900/20 transition-all">
                {{ $label }}
            </a>
            @endforeach
            <div class="pt-2">
                <a href="{{ route('contact') }}"
                   class="block px-4 py-2.5 rounded-xl text-sm font-medium text-center bg-primary-600 text-white hover:bg-primary-500 transition-colors">
                    Hire Me
                </a>
            </div>
        </div>
    </div>
</nav>
