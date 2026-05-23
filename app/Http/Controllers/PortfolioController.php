<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = [
            ['name' => 'Laravel / PHP',    'level' => 90, 'icon' => '🔥'],
            ['name' => 'MySQL / PostgreSQL','level' => 85, 'icon' => '🗄️'],
            ['name' => 'JavaScript',        'level' => 82, 'icon' => '⚡'],
            ['name' => 'Vue.js / React',    'level' => 75, 'icon' => '💡'],
            ['name' => 'HTML / CSS',        'level' => 92, 'icon' => '🎨'],
            ['name' => 'Git / GitHub',      'level' => 88, 'icon' => '🔀'],
            ['name' => 'REST APIs',         'level' => 87, 'icon' => '🔗'],
            ['name' => 'Tailwind CSS',      'level' => 85, 'icon' => '🌊'],
        ];

        $techs = [
            ['name' => 'Laravel',    'color' => '#FF2D20'],
            ['name' => 'PHP',        'color' => '#777BB4'],
            ['name' => 'MySQL',      'color' => '#4479A1'],
            ['name' => 'PostgreSQL', 'color' => '#336791'],
            ['name' => 'Vue.js',     'color' => '#42B883'],
            ['name' => 'React',      'color' => '#61DAFB'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'Tailwind',   'color' => '#38BDF8'],
            ['name' => 'Git',        'color' => '#F05032'],
            ['name' => 'Docker',     'color' => '#2496ED'],
            ['name' => 'Linux',      'color' => '#FCC624'],
            ['name' => 'REST API',   'color' => '#6366F1'],
        ];

        $projects = [
            [
                'title'       => 'E-Commerce Platform',
                'description' => 'Plataforma de comercio electrónico completa con panel de administración, pagos en línea, gestión de inventario y reportes en tiempo real.',
                'tags'        => ['Laravel', 'Vue.js', 'MySQL', 'Stripe'],
                'image'       => null,
                'github'      => 'https://github.com/SebastianBCF',
                'demo'        => null,
                'featured'    => true,
            ],
            [
                'title'       => 'Sistema de Gestión',
                'description' => 'CRM empresarial para gestión de clientes, proyectos y facturación con autenticación de dos factores y roles de usuario.',
                'tags'        => ['Laravel', 'Livewire', 'PostgreSQL', 'Alpine.js'],
                'image'       => null,
                'github'      => 'https://github.com/SebastianBCF',
                'demo'        => null,
                'featured'    => true,
            ],
            [
                'title'       => 'REST API Microservices',
                'description' => 'Arquitectura de microservicios con autenticación JWT, rate limiting, documentación automática con Swagger y despliegue en Docker.',
                'tags'        => ['PHP', 'Laravel', 'Docker', 'JWT'],
                'image'       => null,
                'github'      => 'https://github.com/SebastianBCF',
                'demo'        => null,
                'featured'    => false,
            ],
        ];

        $experience = [
            [
                'role'     => 'Full Stack Developer',
                'company'  => 'Tu Empresa Actual',
                'period'   => '2023 — Presente',
                'desc'     => 'Desarrollo de aplicaciones web con Laravel y Vue.js, optimización de bases de datos, integración de APIs de terceros y gestión de equipos ágiles.',
                'tags'     => ['Laravel', 'Vue.js', 'MySQL'],
            ],
            [
                'role'     => 'Backend Developer',
                'company'  => 'Empresa Anterior',
                'period'   => '2021 — 2023',
                'desc'     => 'Construcción de APIs RESTful, diseño de base de datos relacional, implementación de autenticación y autorización, y despliegue en servidores Linux.',
                'tags'     => ['PHP', 'Laravel', 'PostgreSQL'],
            ],
            [
                'role'     => 'Junior Developer',
                'company'  => 'Primera Empresa',
                'period'   => '2019 — 2021',
                'desc'     => 'Desarrollo frontend con HTML, CSS y JavaScript. Primeros pasos con Laravel y MySQL. Trabajo en equipo con metodologías ágiles.',
                'tags'     => ['HTML', 'CSS', 'JavaScript', 'Laravel'],
            ],
        ];

        return view('portfolio.index', compact('skills', 'techs', 'projects', 'experience'));
    }
}
