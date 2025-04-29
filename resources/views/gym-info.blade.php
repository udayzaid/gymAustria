<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>BODYSKINSOUL - Información</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .header-image {
            height: 400px;
            background: url('https://img.freepik.com/foto-gratis/equipo-gimnasio-moderno_23-2147949746.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
        }
        .header-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .header-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding-top: 150px;
        }
        .price-card {
            background: rgba(0, 183, 255, 0.05);
            border: 1px solid rgba(0, 183, 255, 0.2);
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
        }
        .price-card h3 {
            color: #00B7FF;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .price-card .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }
        .price-card .features {
            margin: 1.5rem 0;
            text-align: left;
        }
        .price-card .features li {
            margin-bottom: 0.5rem;
            color: white;
        }
        .price-card .features li::before {
            content: '✓';
            color: #00B7FF;
            margin-right: 0.5rem;
        }
        .cta-button {
            display: inline-block;
            background-color: #00B7FF;
            color: white;
            padding: 1rem 2rem;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .cta-button:hover {
            background-color: rgba(0, 183, 255, 0.8);
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body class="antialiased font-sans bg-bodyskin-dark">
    <!-- Barra de navegación -->
    <nav class="bg-bodyskin-dark border-b border-bodyskin-blue/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center">
                        <span class="text-white font-bold text-2xl">BODY</span>
                        <span class="text-bodyskin-blue font-bold text-2xl">SKIN</span>
                        <span class="text-white font-bold text-2xl">SOUL</span>
                    </a>
                </div>

                <!-- Botones de navegación -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-white px-4 py-2 rounded-md text-sm font-medium hover:text-bodyskin-blue transition">
                        HORARIOS
                    </a>
                    <a href="#" class="text-white px-4 py-2 rounded-md text-sm font-medium hover:text-bodyskin-blue transition">
                        BLOG
                    </a>
                    <a href="{{ route('login') }}" class="text-white px-4 py-2 rounded-md text-sm font-medium hover:text-bodyskin-blue transition">
                        INICIAR SESIÓN
                    </a>
                    <a href="{{ route('register') }}" class="text-white bg-bodyskin-blue px-4 py-2 rounded-md text-sm font-medium hover:bg-bodyskin-blue/80 transition">
                        ÚNETE AHORA
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Image -->
    <div class="header-image">
        <div class="header-content">
            <h1 class="text-4xl font-bold mb-4">¡OFERTA ESPECIAL!</h1>
            <p class="text-xl mb-8">10% de descuento en todos nuestros planes para nuevos miembros</p>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Planes y Precios -->
        <h2 class="text-3xl font-bold text-white text-center mb-12">Nuestros Planes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Plan Básico -->
            <div class="price-card">
                <h3>Plan Básico</h3>
                <div class="price">$29.99/mes</div>
                <ul class="features">
                    <li>Acceso a área de pesas</li>
                    <li>Área cardiovascular</li>
                    <li>Casillero personal</li>
                    <li>Duchas</li>
                </ul>
                <a href="{{ route('register') }}" class="cta-button">Comenzar Ahora</a>
            </div>

            <!-- Plan Premium -->
            <div class="price-card">
                <h3>Plan Premium</h3>
                <div class="price">$49.99/mes</div>
                <ul class="features">
                    <li>Todo lo del plan básico</li>
                    <li>Clases grupales</li>
                    <li>Área de CrossFit</li>
                    <li>Evaluación mensual</li>
                    <li>Plan nutricional básico</li>
                </ul>
                <a href="{{ route('register') }}" class="cta-button">Comenzar Ahora</a>
            </div>

            <!-- Plan Elite -->
            <div class="price-card">
                <h3>Plan Elite</h3>
                <div class="price">$79.99/mes</div>
                <ul class="features">
                    <li>Todo lo del plan premium</li>
                    <li>Entrenador personal</li>
                    <li>Plan nutricional avanzado</li>
                    <li>Acceso 24/7</li>
                    <li>Área de spa</li>
                    <li>Suplementos básicos</li>
                </ul>
                <a href="{{ route('register') }}" class="cta-button">Comenzar Ahora</a>
            </div>
        </div>

        <!-- Información Adicional -->
        <div class="mt-16 text-white">
            <h2 class="text-3xl font-bold text-center mb-8">¿Por qué elegirnos?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-bodyskin-blue">Instalaciones de Primera</h3>
                    <p class="mb-4">Contamos con más de 1,500m² de instalaciones con el mejor equipo del mercado. Nuestras áreas están diseñadas para maximizar tu rendimiento y comodidad.</p>
                    
                    <h3 class="text-xl font-semibold mb-4 text-bodyskin-blue">Entrenadores Certificados</h3>
                    <p>Nuestro equipo de entrenadores cuenta con certificaciones internacionales y años de experiencia en diferentes disciplinas.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-bodyskin-blue">Clases Grupales</h3>
                    <p class="mb-4">Más de 20 clases diferentes cada semana, incluyendo yoga, pilates, spinning, HIIT, y más.</p>

                    <h3 class="text-xl font-semibold mb-4 text-bodyskin-blue">Comunidad</h3>
                    <p>Únete a una comunidad apasionada por el fitness y el bienestar. Organizamos eventos sociales y competencias regulares.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 