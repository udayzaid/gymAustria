<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title>BODYSKINSOUL</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    
    <!-- Styles & Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        .jumbotron {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 64px);
            background: url('https://img.freepik.com/foto-gratis/vista-angulo-hombre-musculoso-irreconocible-preparandose-levantar-barra-club-salud_637285-2497.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: relative;
        }
        .jumbotron::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .jumbotron > * {
            position: relative;
            z-index: 2;
        }
        .jumbotron h1 {
            font-size: 4rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .jumbotron p {
            font-size: 1.5rem;
            max-width: 800px;
            text-align: center;
            margin-bottom: 20px;
        }
        .features {
            padding: 80px 0;
            background-color: #1A1A1A;
            color: white;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .feature-card {
            text-align: center;
            padding: 30px;
            border: 1px solid rgba(0, 183, 255, 0.2);
            border-radius: 10px;
            background-color: rgba(0, 183, 255, 0.05);
        }
        .feature-card h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #00B7FF;
        }
        .feature-card p {
            font-size: 1.1rem;
            color: #ffffff;
            line-height: 1.6;
        }
        .cta-button {
            display: inline-block;
            background-color: #00B7FF;
            color: white;
            padding: 20px 60px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            margin-top: 30px;
            box-shadow: 0 4px 15px rgba(0, 183, 255, 0.3);
            animation: pulse 2s infinite;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        .cta-button:hover {
            background-color: rgba(0, 183, 255, 0.8);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 183, 255, 0.4);
            color: white;
            text-decoration: none;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body class="antialiased font-sans bg-bodyskin-dark">
    <div>
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
                        <a href="<?php echo e(route('login')); ?>" class="text-white px-4 py-2 rounded-md text-sm font-medium hover:text-bodyskin-blue transition">
                            INICIAR SESIÓN
                        </a>
                        <a href="<?php echo e(route('register')); ?>" class="text-white bg-bodyskin-blue px-4 py-2 rounded-md text-sm font-medium hover:bg-bodyskin-blue/80 transition">
                            ÚNETE AHORA
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="jumbotron">
            <h1 class="display-4">TRANSFORMA TU VIDA</h1>
            <p class="lead">Únete a la mejor experiencia fitness con entrenamiento y equipamiento de clase mundial</p>
            <a href="<?php echo e(route('gym-info')); ?>" class="cta-button">
                ¡10% DE DESCUENTO!
            </a>
        </div>

        <!-- Features Section -->
        <div class="features">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Equipamiento de Última Generación</h2>
                    <p>Accede a la última tecnología fitness y equipamiento premium para resultados óptimos.</p>
                </div>
                <div class="feature-card">
                    <h2>Entrenadores Expertos</h2>
                    <p>Trabaja con profesionales certificados que te guiarán en tu viaje fitness.</p>
                </div>
                <div class="feature-card">
                    <h2>Clases Diversas</h2>
                    <p>Elige entre una amplia gama de clases grupales incluyendo yoga, HIIT y entrenamiento de fuerza.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\bodyskin\resources\views/welcome.blade.php ENDPATH**/ ?>