@extends('layouts.app')

@section('title', 'Sebastian Campos — Desarrollador Web Junior')

@section('content')

{{-- ══════════════════════════════════════════════════
     HERO SECTION
══════════════════════════════════════════════════ --}}
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden px-6">

    {{-- Gradient orbs --}}
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    {{-- Particle canvas --}}
    <canvas id="particles-canvas"></canvas>

    {{-- Grid lines --}}
    <div class="absolute inset-0 opacity-5"
         style="background-image: linear-gradient(rgba(99,102,241,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(99,102,241,0.5) 1px, transparent 1px); background-size: 60px 60px;">
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-5xl mx-auto text-center">

        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 mb-8 animate-[fadeUp_0.6s_0.1s_both]" style="animation: fadeUp 0.6s 0.1s both;">
            <span class="section-tag">👋 Buscando prácticas y primer empleo</span>
        </div>

        {{-- Name --}}
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black font-display mb-6 leading-tight"
            style="animation: fadeUp 0.7s 0.2s both;">
            <span class="text-slate-100">Sebastian</span><br>
            <span class="gradient-text">Campos</span>
        </h1>

        {{-- Typewriter --}}
        <div class="text-xl md:text-2xl lg:text-3xl font-mono text-slate-400 mb-8 h-10"
             style="animation: fadeUp 0.7s 0.35s both;">
            <span class="text-indigo-400">&gt; </span><span id="typed-text"></span><span class="typed-cursor">|</span>
        </div>

        {{-- Description --}}
        <p class="text-base md:text-lg text-slate-400 max-w-2xl mx-auto mb-12 leading-relaxed"
           style="animation: fadeUp 0.7s 0.5s both;">
            Desarrollador web junior, <span class="text-slate-200 font-medium">Técnico Superior en DAM</span> y terminando DAW.
            Construyo aplicaciones web con Laravel, PHP, JavaScript y Tailwind CSS,
            cuidando la accesibilidad y el código limpio.
        </p>

        {{-- CTAs --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-20"
             style="animation: fadeUp 0.7s 0.65s both;">
            <a href="#projects" class="btn-primary text-base">
                <span>Ver mis proyectos</span>
                <svg class="w-4 h-4 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#contact" class="btn-outline text-base">
                Contactar
            </a>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-3 gap-6 max-w-lg mx-auto" style="animation: fadeUp 0.7s 0.8s both;">
            <div class="text-center">
                <div class="stat-number" data-count="2">0+</div>
                <div class="text-slate-500 text-sm mt-1">Ciclos superiores</div>
            </div>
            <div class="text-center">
                <div class="stat-number" data-count="400">0+</div>
                <div class="text-slate-500 text-sm mt-1">Commits en Zampa</div>
            </div>
            <div class="text-center">
                <div class="stat-number" data-count="12">0+</div>
                <div class="text-slate-500 text-sm mt-1">Tecnologías</div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 scroll-indicator">
        <span>scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════
     ABOUT SECTION
══════════════════════════════════════════════════ --}}
<section id="about" class="py-28 px-6 relative">
    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            {{-- Avatar --}}
            <div class="flex justify-center reveal-left">
                <div class="relative">
                    {{-- Ring animado --}}
                    <div class="avatar-ring">
                        <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden glass"
                             style="border: 4px solid transparent; background-clip: padding-box;">
                            {{-- Placeholder avatar con iniciales --}}
                            <div class="w-full h-full flex items-center justify-center text-7xl font-black font-display gradient-text bg-slate-900">
                                SCF
                            </div>
                        </div>
                    </div>
                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 -right-4 glass rounded-2xl px-4 py-3 flex items-center gap-2 glow-indigo">
                        <span class="text-2xl">⚡</span>
                        <div>
                            <div class="text-xs text-slate-400">Stack favorito</div>
                            <div class="text-sm font-semibold text-slate-200">Laravel + Tailwind</div>
                        </div>
                    </div>
                    {{-- Floating badge 2 --}}
                    <div class="absolute -top-4 -left-4 glass rounded-2xl px-4 py-3 flex items-center gap-2 glow-cyan">
                        <span class="text-2xl">🚀</span>
                        <div>
                            <div class="text-xs text-slate-400">Disponible</div>
                            <div class="text-sm font-semibold text-green-400">Prácticas / Junior</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bio --}}
            <div class="reveal-right">
                <span class="section-tag mb-4 inline-block">Sobre mí</span>
                <h2 class="text-4xl md:text-5xl font-black font-display mb-6 leading-tight">
                    Hola, soy <span class="gradient-text">Sebastian</span> 👋
                </h2>
                <p class="text-slate-400 text-base leading-relaxed mb-4">
                    Soy desarrollador web junior y Técnico Superior en Desarrollo de Aplicaciones Multiplataforma
                    por el Instituto FOC de Granada, donde estoy terminando también Desarrollo de Aplicaciones Web
                    (solo me faltan las prácticas). Trabajo sobre todo con
                    <span class="text-indigo-400 font-medium">Laravel, PHP y JavaScript</span>, y he hecho prácticas
                    desarrollando webs para clientes reales en una agencia de marketing.
                </p>
                <p class="text-slate-400 text-base leading-relaxed mb-8">
                    Mi proyecto más completo es Zampa, un SaaS para restaurantes hecho en equipo con Laravel 12,
                    con carta por QR, panel de cocina en tiempo real y un chatbot con IA. Ahora busco
                    <span class="text-cyan-400 font-medium">prácticas de DAW o mi primer empleo</span> en Granada o en remoto.
                </p>

                {{-- Facts --}}
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach([
                        ['🎓', 'Técnico Superior en DAM'],
                        ['📍', 'Granada, España'],
                        ['💼', 'Desarrollador Web Junior'],
                        ['🌐', 'Español / Inglés B2'],
                    ] as $fact)
                    <div class="flex items-center gap-2 text-sm text-slate-400">
                        <span>{{ $fact[0] }}</span>
                        <span>{{ $fact[1] }}</span>
                    </div>
                    @endforeach
                </div>

                {{-- CTA --}}
                <div class="flex gap-4">
                    <a href="#contact" class="btn-primary">
                        <span>Contactar</span>
                    </a>
                    <a href="https://www.linkedin.com/in/sebastian-campos-fernandez-39051933a" target="_blank" class="btn-outline">
                        Ver LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════
     SKILLS SECTION
══════════════════════════════════════════════════ --}}
<section id="skills" class="py-28 px-6 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-indigo-950/10 to-transparent pointer-events-none"></div>
    <div class="max-w-6xl mx-auto relative">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-tag mb-4 inline-block">Habilidades</span>
            <h2 class="text-4xl md:text-5xl font-black font-display">
                Mi <span class="gradient-text">Stack Técnico</span>
            </h2>
            <p class="text-slate-400 mt-4 max-w-xl mx-auto">
                Tecnologías con las que he trabajado en mis prácticas, proyectos y en el ciclo.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16">

            {{-- Skill bars --}}
            <div class="space-y-6 reveal-left" id="skill-bars">
                @foreach($skills as $skill)
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center gap-2">
                            <span>{{ $skill['icon'] }}</span>
                            <span class="text-slate-300 font-medium text-sm">{{ $skill['name'] }}</span>
                        </div>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-level="{{ $skill['level'] }}"></div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Tech badges --}}
            <div class="reveal-right">
                <h3 class="text-lg font-semibold text-slate-300 mb-6 font-display">Tecnologías & herramientas</h3>
                <div class="flex flex-wrap gap-3 stagger" id="tech-badges">
                    @foreach($techs as $tech)
                    <div class="tech-badge">
                        <span class="w-2 h-2 rounded-full" style="background: {{ $tech['color'] }};"></span>
                        <span class="text-slate-300">{{ $tech['name'] }}</span>
                    </div>
                    @endforeach
                </div>

                {{-- Extra info --}}
                <div class="mt-10 glass rounded-2xl p-6 gradient-border">
                    <h4 class="font-semibold text-slate-200 mb-4 flex items-center gap-2">
                        <span>📚</span> Siempre aprendiendo
                    </h4>
                    <div class="space-y-2">
                        @foreach(['React y Node.js', 'Docker y despliegue', 'Testing con Pest PHP', 'Inglés técnico'] as $item)
                        <div class="flex items-center gap-2 text-sm text-slate-400">
                            <svg class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            {{ $item }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════
     PROJECTS SECTION
══════════════════════════════════════════════════ --}}
<section id="projects" class="py-28 px-6">
    <div class="max-w-6xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-tag mb-4 inline-block">Portafolio</span>
            <h2 class="text-4xl md:text-5xl font-black font-display">
                Mis <span class="gradient-text">Proyectos</span>
            </h2>
            <p class="text-slate-400 mt-4 max-w-xl mx-auto">
                Proyectos reales del ciclo y en equipo.
            </p>
        </div>

        {{-- Projects grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 stagger" id="projects-grid">
            @foreach($projects as $index => $project)
            <article class="project-card glass glass-hover gradient-border">

                {{-- Image / placeholder --}}
                <div class="project-card-img">
                    @if($project['image'])
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
                    @else
                        {{-- Gradient placeholder --}}
                        <div class="w-full h-full flex items-center justify-center"
                             style="background: linear-gradient(135deg,
                                {{ ['#1e1b4b,#312e81', '#0c4a6e,#0e7490', '#1a1a2e,#16213e'][$index % 3] }});">
                            <div class="text-6xl">{{ ['💻','🚀','⚙️'][$index % 3] }}</div>
                        </div>
                    @endif
                    {{-- Overlay links --}}
                    <div class="project-card-overlay">
                        <div class="flex gap-3">
                            @if($project['github'])
                            <a href="{{ $project['github'] }}" target="_blank"
                               class="flex items-center gap-1.5 text-xs font-medium text-white bg-white/10 hover:bg-white/20 backdrop-blur px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                                GitHub
                            </a>
                            @endif
                            @if($project['demo'])
                            <a href="{{ $project['demo'] }}" target="_blank"
                               class="flex items-center gap-1.5 text-xs font-medium text-white bg-indigo-500/60 hover:bg-indigo-500/80 backdrop-blur px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                Demo
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Card body --}}
                <div class="p-5">
                    @if($project['featured'])
                    <span class="section-tag text-xs mb-3 inline-block">⭐ Destacado</span>
                    @endif
                    <h3 class="text-lg font-bold font-display text-slate-100 mb-2">{{ $project['title'] }}</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                        <span class="text-xs px-2 py-0.5 rounded-md bg-indigo-950/60 text-indigo-300 border border-indigo-800/40">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        {{-- View more --}}
        <div class="text-center mt-12 reveal">
            <a href="https://github.com/SebastianBCF" target="_blank" class="btn-outline">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                Ver más en GitHub
            </a>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════
     EXPERIENCE SECTION
══════════════════════════════════════════════════ --}}
<section id="experience" class="py-28 px-6 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-purple-950/10 to-transparent pointer-events-none"></div>
    <div class="max-w-3xl mx-auto relative">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-tag mb-4 inline-block">Trayectoria</span>
            <h2 class="text-4xl md:text-5xl font-black font-display">
                Experiencia y <span class="gradient-text">Formación</span>
            </h2>
        </div>

        {{-- Timeline --}}
        <div class="space-y-10">
            @foreach($experience as $exp)
            <div class="timeline-item reveal">
                <div class="glass rounded-2xl p-6 glass-hover gradient-border ml-4">
                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                        <div>
                            <h3 class="text-lg font-bold font-display text-slate-100">{{ $exp['role'] }}</h3>
                            <p class="text-indigo-400 font-medium text-sm">{{ $exp['company'] }}</p>
                        </div>
                        <span class="section-tag text-xs shrink-0">{{ $exp['period'] }}</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">{{ $exp['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($exp['tags'] as $tag)
                        <span class="text-xs px-2 py-0.5 rounded-md bg-slate-800 text-slate-300 border border-slate-700/50">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════
     CONTACT SECTION
══════════════════════════════════════════════════ --}}
<section id="contact" class="py-28 px-6">
    <div class="max-w-5xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-tag mb-4 inline-block">Contacto</span>
            <h2 class="text-4xl md:text-5xl font-black font-display">
                ¿Trabajamos <span class="gradient-text">juntos?</span>
            </h2>
            <p class="text-slate-400 mt-4 max-w-xl mx-auto">
                Busco prácticas y mi primer empleo como desarrollador web, en Granada o en remoto.
                Escríbeme y te respondo lo antes posible.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start">

            {{-- Contact info --}}
            <div class="reveal-left space-y-8">
                {{-- Cards de contacto --}}
                @foreach([
                    ['📧', 'Email', 'secafer06@gmail.com', 'mailto:secafer06@gmail.com'],
                    ['💼', 'LinkedIn', 'Sebastian Campos Fernandez', 'https://www.linkedin.com/in/sebastian-campos-fernandez-39051933a'],
                    ['🐙', 'GitHub', 'github.com/SebastianBCF', 'https://github.com/SebastianBCF'],
                ] as $contact)
                <a href="{{ $contact[3] }}" target="_blank"
                   class="flex items-center gap-4 glass rounded-2xl p-5 glass-hover gradient-border group">
                    <span class="text-3xl">{{ $contact[0] }}</span>
                    <div>
                        <div class="text-xs text-slate-500 mb-0.5">{{ $contact[1] }}</div>
                        <div class="text-slate-200 font-medium group-hover:text-indigo-400 transition-colors">{{ $contact[2] }}</div>
                    </div>
                    <svg class="w-4 h-4 text-slate-600 group-hover:text-indigo-400 ml-auto transition-all group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                @endforeach

                {{-- Social icons --}}
                <div class="flex gap-3 pt-2">
                    <a href="https://github.com/SebastianBCF" target="_blank" class="social-icon" aria-label="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/sebastian-campos-fernandez-39051933a" target="_blank" class="social-icon" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Contact form --}}
            <div class="reveal-right">
                <div class="glass rounded-2xl p-8 gradient-border">
                    <h3 class="text-xl font-bold font-display text-slate-100 mb-6">Envíame un mensaje</h3>
                    <form id="contact-form" class="space-y-5" onsubmit="handleContactForm(event)">
                        @csrf
                        <div>
                            <label class="block text-sm text-slate-400 mb-2">Nombre</label>
                            <input type="text" name="name" placeholder="Tu nombre completo"
                                   class="form-input" required>
                        </div>
                        <div>
                            <label class="block text-sm text-slate-400 mb-2">Email</label>
                            <input type="email" name="email" placeholder="tu@email.com"
                                   class="form-input" required>
                        </div>
                        <div>
                            <label class="block text-sm text-slate-400 mb-2">Asunto</label>
                            <input type="text" name="subject" placeholder="¿En qué puedo ayudarte?"
                                   class="form-input" required>
                        </div>
                        <div>
                            <label class="block text-sm text-slate-400 mb-2">Mensaje</label>
                            <textarea name="message" rows="4" placeholder="Cuéntame en qué puedo ayudarte..."
                                      class="form-input resize-none" required></textarea>
                        </div>
                        <button type="submit" id="submit-btn" class="btn-primary w-full justify-center">
                            <span id="btn-text">Enviar mensaje</span>
                            <svg id="btn-icon" class="w-4 h-4 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>
                        <div id="form-message" class="hidden text-center text-sm py-2 rounded-lg"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
