<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sebastian Campos Fernandez - Full Stack Developer Portfolio">
    <meta name="author" content="Sebastian Campos Fernandez">
    <title>@yield('title', 'Sebastian Campos — Full Stack Developer')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>⚡</text></svg>">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="antialiased">

    {{-- Page loader --}}
    <div class="page-loader" id="page-loader">
        <div class="text-center">
            <div class="loader-ring mx-auto mb-4"></div>
            <p class="section-tag">Cargando...</p>
        </div>
    </div>

    {{-- Scroll progress bar --}}
    <div id="scroll-progress"></div>

    {{-- Custom cursor (desktop only) --}}
    <div class="cursor" id="cursor-dot" style="top:0;left:0;">
        <div class="cursor-dot"></div>
    </div>
    <div class="cursor" id="cursor-ring" style="top:0;left:0;">
        <div class="cursor-ring"></div>
    </div>

    {{-- Navigation --}}
    <nav class="navbar px-6 py-4" id="navbar">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-2 text-xl font-bold font-display">
                <span class="gradient-text">&lt;SCF</span>
                <span class="text-slate-400 font-light">/&gt;</span>
            </a>

            {{-- Desktop nav --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#about"    class="nav-link">Sobre mí</a>
                <a href="#skills"   class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Proyectos</a>
                <a href="#experience" class="nav-link">Experiencia</a>
                <a href="#contact"  class="nav-link">Contacto</a>
            </div>

            {{-- CTA + Hamburger --}}
            <div class="flex items-center gap-4">
                <a href="#contact" class="hidden md:inline-flex btn-primary text-sm py-2 px-5">
                    <span>Contáctame</span>
                </a>
                <button id="menu-toggle" class="md:hidden flex flex-col gap-1.5 p-2" aria-label="Menu">
                    <span class="w-6 h-0.5 bg-slate-400 transition-all duration-300" id="bar1"></span>
                    <span class="w-6 h-0.5 bg-slate-400 transition-all duration-300" id="bar2"></span>
                    <span class="w-4 h-0.5 bg-slate-400 transition-all duration-300" id="bar3"></span>
                </button>
            </div>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div id="mobile-menu" role="dialog" aria-label="Navegación móvil">
        <button id="menu-close" class="absolute top-6 right-6 text-slate-400 hover:text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <a href="#about"      class="text-2xl font-display font-semibold text-slate-200 hover:text-indigo-400 transition-colors" onclick="closeMobileMenu()">Sobre mí</a>
        <a href="#skills"     class="text-2xl font-display font-semibold text-slate-200 hover:text-indigo-400 transition-colors" onclick="closeMobileMenu()">Skills</a>
        <a href="#projects"   class="text-2xl font-display font-semibold text-slate-200 hover:text-indigo-400 transition-colors" onclick="closeMobileMenu()">Proyectos</a>
        <a href="#experience" class="text-2xl font-display font-semibold text-slate-200 hover:text-indigo-400 transition-colors" onclick="closeMobileMenu()">Experiencia</a>
        <a href="#contact"    class="text-2xl font-display font-semibold text-slate-200 hover:text-indigo-400 transition-colors" onclick="closeMobileMenu()">Contacto</a>
        <a href="#contact" class="btn-primary mt-4" onclick="closeMobileMenu()"><span>Contáctame</span></a>
    </div>

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t border-slate-800/50 py-10 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="font-display font-bold text-lg">
                <span class="gradient-text">&lt;SCF /&gt;</span>
            </p>
            <p class="text-slate-500 text-sm font-mono">
                © {{ date('Y') }} Sebastian Campos Fernandez · Hecho con ❤️ y Laravel
            </p>
            <div class="flex gap-3">
                <a href="https://github.com/SebastianBCF" target="_blank" class="social-icon" aria-label="GitHub">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="https://linkedin.com/in/sebastianbcf" target="_blank" class="social-icon" aria-label="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>
