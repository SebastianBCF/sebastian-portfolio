<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = [
            ['name' => 'HTML / CSS',        'level' => 90, 'icon' => '🎨'],
            ['name' => 'JavaScript',        'level' => 75, 'icon' => '⚡'],
            ['name' => 'PHP / Laravel',     'level' => 75, 'icon' => '🔥'],
            ['name' => 'Tailwind CSS',      'level' => 75, 'icon' => '🌊'],
            ['name' => 'MySQL / SQL',       'level' => 70, 'icon' => '🗄️'],
            ['name' => 'Git / GitHub',      'level' => 75, 'icon' => '🔀'],
            ['name' => 'Java',              'level' => 55, 'icon' => '☕'],
            ['name' => 'Docker / Linux',    'level' => 50, 'icon' => '🐳'],
        ];

        $techs = [
            ['name' => 'Laravel',    'color' => '#FF2D20'],
            ['name' => 'PHP',        'color' => '#777BB4'],
            ['name' => 'Blade',      'color' => '#F05340'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'HTML5',      'color' => '#E34F26'],
            ['name' => 'CSS3 / Sass','color' => '#1572B6'],
            ['name' => 'Tailwind',   'color' => '#38BDF8'],
            ['name' => 'MySQL',      'color' => '#4479A1'],
            ['name' => 'MongoDB',    'color' => '#47A248'],
            ['name' => 'Java',       'color' => '#E76F00'],
            ['name' => 'Git',        'color' => '#F05032'],
            ['name' => 'Docker',     'color' => '#2496ED'],
            ['name' => 'Linux',      'color' => '#FCC624'],
            ['name' => 'Pest PHP',   'color' => '#C026D3'],
        ];

        $projects = [
            [
                'title'       => 'Zampa — SaaS para bares y restaurantes',
                'description' => 'Proyecto en equipo de 3 desarrolladores. Carta digital pública con acceso por QR, filtros de alérgenos, carrito de pedidos, panel de cocina en tiempo real y chatbot con IA (OpenAI). Interfaz accesible WCAG 2.1 AA. Me encargué sobre todo del frontend con componentes Blade y Tailwind.',
                'tags'        => ['Laravel 12', 'Blade', 'Tailwind CSS', 'OpenAI', 'Pest PHP'],
                'image'       => null,
                'github'      => 'https://github.com/BENJAMINDTS/Zampa',
                'demo'        => null,
                'featured'    => true,
            ],
            [
                'title'       => 'Bongo — Plataforma de tareas',
                'description' => 'Plataforma de tareas y actividades personalizable desarrollada con Laravel 12. Repositorio privado: puedo enseñarla en una entrevista.',
                'tags'        => ['Laravel 12', 'Blade', 'PHP'],
                'image'       => null,
                'github'      => null,
                'demo'        => null,
                'featured'    => false,
            ],
            [
                'title'       => 'Ejercicios del ciclo DAW / DAM',
                'description' => 'Repositorio con las prácticas de los ciclos superiores en el Instituto FOC: HTML, CSS y JavaScript, PHP, SQL, XML y Python.',
                'tags'        => ['JavaScript', 'PHP', 'SQL', 'Python'],
                'image'       => null,
                'github'      => 'https://github.com/SebastianBCF/FP_SUPERIOR_DAM-DAW',
                'demo'        => null,
                'featured'    => false,
            ],
        ];

        $experience = [
            [
                'role'     => 'Desarrollador Web — Prácticas FCT',
                'company'  => 'Wunjo Marketing · Granada',
                'period'   => 'Mar 2026 — May 2026',
                'desc'     => 'Desarrollo de páginas web para clientes reales en producción, maquetación responsive multi-dispositivo, animaciones e interactividad con JavaScript (incluida animación 3D), menús de navegación y páginas de producto para tiendas online, y optimización SEO.',
                'tags'     => ['HTML5', 'CSS3', 'JavaScript', 'SEO'],
            ],
            [
                'role'     => 'CFGS Desarrollo de Aplicaciones Web + Multiplataforma',
                'company'  => 'Instituto FOC · Granada',
                'period'   => '2024 — 2026',
                'desc'     => 'Doble titulación DAW + DAM: desarrollo web cliente y servidor, bases de datos relacionales y NoSQL, programación en Java, despliegue de aplicaciones y entornos de desarrollo.',
                'tags'     => ['PHP', 'Java', 'SQL', 'Docker'],
            ],
        ];

        return view('portfolio.index', compact('skills', 'techs', 'projects', 'experience'));
    }
}
