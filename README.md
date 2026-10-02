# Portfolio — Sebastian Campos Fernandez

Portfolio personal de **Sebastian Campos Fernandez**, desarrollador web junior (Técnico Superior en DAM y terminando DAW en el Instituto FOC, Granada).

Es una web de una sola página hecha con **Laravel 12**, **Blade** y **Tailwind CSS 4**, con estas secciones:

- **Inicio**: presentación con efecto de escritura y contadores animados
- **Sobre mí**: formación y perfil
- **Skills**: stack técnico y tecnologías
- **Proyectos**: Zampa, Bongo y los ejercicios del ciclo
- **Experiencia y formación**: prácticas en Wunjo Marketing e Instituto FOC
- **Contacto**: formulario que abre el correo del visitante con el mensaje ya escrito

Los datos (skills, proyectos y experiencia) están en `app/Http/Controllers/PortfolioController.php`, así que para actualizar el portfolio no hace falta tocar las vistas.

## Tecnologías

![Laravel](https://img.shields.io/badge/Laravel_12-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP_8.2-777BB4?style=flat&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS_4-38BDF8?style=flat&logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=flat&logo=vite&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)

## Ejecutarlo en local

```bash
git clone https://github.com/SebastianBCF/sebastian-portfolio.git
cd sebastian-portfolio
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install
npm run build
php artisan serve
```

Abre http://127.0.0.1:8000

## Estructura

```
app/Http/Controllers/PortfolioController.php   # datos del portfolio
resources/views/layouts/app.blade.php          # layout, navegación y footer
resources/views/portfolio/index.blade.php      # secciones de la página
resources/css/app.css                          # estilos y animaciones
resources/js/app.js                            # partículas, typewriter, contadores y formulario
```

## Contacto

- Email: secafer06@gmail.com
- LinkedIn: [Sebastian Campos Fernandez](https://www.linkedin.com/in/sebastian-campos-fernandez-39051933a)
- GitHub: [@SebastianBCF](https://github.com/SebastianBCF)
