import './bootstrap';

// ─── Page Loader ────────────────────────────────────────────────
window.addEventListener('load', () => {
    const loader = document.getElementById('page-loader');
    if (loader) setTimeout(() => loader.classList.add('hidden'), 400);
    initAll();
});

function initAll() {
    initParticles();
    initTypewriter();
    initNavbar();
    initCursor();
    initScrollReveal();
    initSkillBars();
    initScrollProgress();
    initCounters();
    initMobileMenu();
}

// ─── Particles ──────────────────────────────────────────────────
function initParticles() {
    const canvas = document.getElementById('particles-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let particles = [];

    const resize = () => {
        canvas.width  = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    };
    resize();
    window.addEventListener('resize', resize);

    class Particle {
        constructor() { this.reset(); }
        reset() {
            this.x     = Math.random() * canvas.width;
            this.y     = Math.random() * canvas.height;
            this.vx    = (Math.random() - 0.5) * 0.4;
            this.vy    = (Math.random() - 0.5) * 0.4;
            this.r     = Math.random() * 1.5 + 0.5;
            this.alpha = Math.random() * 0.5 + 0.1;
            this.color = Math.random() > 0.5 ? '99,102,241' : '34,211,238';
        }
        update() {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) this.reset();
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${this.color},${this.alpha})`;
            ctx.fill();
        }
    }

    for (let i = 0; i < 80; i++) particles.push(new Particle());

    function loop() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => { p.update(); p.draw(); });
        particles.forEach((a, i) => {
            particles.slice(i + 1).forEach(b => {
                const dx = a.x - b.x, dy = a.y - b.y;
                const d  = Math.sqrt(dx * dx + dy * dy);
                if (d < 100) {
                    ctx.beginPath();
                    ctx.moveTo(a.x, a.y);
                    ctx.lineTo(b.x, b.y);
                    ctx.strokeStyle = `rgba(99,102,241,${0.08 * (1 - d / 100)})`;
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            });
        });
        requestAnimationFrame(loop);
    }
    loop();
}

// ─── Typewriter ─────────────────────────────────────────────────
function initTypewriter() {
    const el = document.getElementById('typed-text');
    if (!el) return;

    const words = [
        'Desarrollador Web Junior',
        'PHP & Laravel',
        'HTML · CSS · JavaScript',
        'DAW + DAM',
        'Buscando prácticas',
    ];
    let wIdx = 0, cIdx = 0, del = false;

    function type() {
        const word = words[wIdx];
        el.textContent = del ? word.slice(0, --cIdx) : word.slice(0, ++cIdx);
        if (!del && cIdx === word.length)  { del = true;  setTimeout(type, 2000); return; }
        if ( del && cIdx === 0)            { del = false; wIdx = (wIdx + 1) % words.length; }
        setTimeout(type, del ? 60 : 100);
    }
    setTimeout(type, 800);
}

// ─── Navbar ──────────────────────────────────────────────────────
function initNavbar() {
    const navbar   = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');

    window.addEventListener('scroll', () => {
        navbar?.classList.toggle('scrolled', window.scrollY > 50);
        let current = '';
        sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) current = s.id; });
        navLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === `#${current}`));
    }, { passive: true });
}

// ─── Custom cursor ───────────────────────────────────────────────
function initCursor() {
    const dot  = document.getElementById('cursor-dot');
    const ring = document.getElementById('cursor-ring');
    if (!dot || !ring || window.matchMedia('(pointer: coarse)').matches) return;

    let rx = 0, ry = 0, mx = 0, my = 0;

    document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY;
        dot.style.left = mx + 'px'; dot.style.top = my + 'px'; });

    (function lerp() {
        rx += (mx - rx) * 0.12; ry += (my - ry) * 0.12;
        ring.style.left = rx + 'px'; ring.style.top = ry + 'px';
        requestAnimationFrame(lerp);
    })();

    document.querySelectorAll('a, button, .glass-hover').forEach(el => {
        const inner = ring.querySelector('.cursor-ring');
        el.addEventListener('mouseenter', () => inner.style.transform = 'translate(-50%,-50%) scale(1.8)');
        el.addEventListener('mouseleave', () => inner.style.transform = 'translate(-50%,-50%) scale(1)');
    });
}

// ─── Scroll reveal ───────────────────────────────────────────────
function initScrollReveal() {
    const obs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el    = entry.target;
            const delay = parseInt(el.dataset.delay || 0);
            setTimeout(() => el.classList.add('visible'), delay);
            obs.unobserve(el);
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger').forEach(el => obs.observe(el));
}

// ─── Skill bars ──────────────────────────────────────────────────
function initSkillBars() {
    const obs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.querySelectorAll('.skill-bar-fill').forEach(bar => {
                setTimeout(() => { bar.style.width = bar.dataset.level + '%'; }, 200);
            });
            obs.unobserve(entry.target);
        });
    }, { threshold: 0.3 });

    const section = document.getElementById('skill-bars');
    if (section) obs.observe(section);
}

// ─── Scroll progress bar ─────────────────────────────────────────
function initScrollProgress() {
    const bar = document.getElementById('scroll-progress');
    if (!bar) return;
    window.addEventListener('scroll', () => {
        bar.style.width = (window.scrollY / (document.body.scrollHeight - window.innerHeight) * 100) + '%';
    }, { passive: true });
}

// ─── Animated counters ───────────────────────────────────────────
function initCounters() {
    const obs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el  = entry.target;
            const end = parseInt(el.dataset.count, 10);
            let cur = 0;
            const step = Math.ceil(end / 40);
            const timer = setInterval(() => {
                cur = Math.min(cur + step, end);
                el.textContent = cur + '+';
                if (cur >= end) clearInterval(timer);
            }, 40);
            obs.unobserve(el);
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-count]').forEach(el => obs.observe(el));
}

// ─── Mobile menu ─────────────────────────────────────────────────
function initMobileMenu() {
    const toggle = document.getElementById('menu-toggle');
    const close  = document.getElementById('menu-close');

    toggle?.addEventListener('click', () => {
        document.getElementById('mobile-menu')?.classList.add('open');
        document.body.style.overflow = 'hidden';
    });
    close?.addEventListener('click', closeMobileMenu);
}

window.closeMobileMenu = () => {
    document.getElementById('mobile-menu')?.classList.remove('open');
    document.body.style.overflow = '';
};

// ─── Contact form ─────────────────────────────────────────────────
window.handleContactForm = async (e) => {
    e.preventDefault();
    const btn     = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const msgDiv  = document.getElementById('form-message');

    // No hay backend de correo: se abre el cliente de email del visitante con el mensaje ya escrito
    const f = new FormData(e.target);
    const body = `${f.get('message')}\n\n${f.get('name')} <${f.get('email')}>`;
    window.location.href = `mailto:secafer06@gmail.com?subject=${encodeURIComponent(f.get('subject'))}&body=${encodeURIComponent(body)}`;
    btn.disabled = true;

    msgDiv.className = 'text-center text-sm py-3 rounded-xl bg-green-500/10 text-green-400 border border-green-500/20';
    msgDiv.textContent = '✉️ Se ha abierto tu programa de correo con el mensaje listo para enviar.';
    e.target.reset();
    btnText.textContent = 'Enviar mensaje';
    btn.disabled = false;
    setTimeout(() => { msgDiv.className = 'hidden'; }, 5000);
};
