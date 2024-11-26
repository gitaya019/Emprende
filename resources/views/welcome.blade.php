<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprende</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom smooth scroll and selection */
        html {
            scroll-behavior: smooth;
        }
        ::selection {
            background-color: rgba(45, 212, 191, 0.3);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800">

    <!-- Header with soft shadow and smooth transition -->
    <header class="fixed w-full top-0 z-50 bg-white/90 backdrop-blur-md shadow-md transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-extrabold text-teal-600 tracking-tight">Emprende</h1>
            <nav class="space-x-6">
                <a href="/" class="text-gray-600 hover:text-teal-600 transition-colors duration-300">Inicio</a>
                <a href="/admin" class="inline-block px-4 py-2 bg-teal-500 text-white rounded-full shadow-md hover:bg-teal-600 transition-all duration-300 ease-in-out transform hover:-translate-y-0.5">Iniciar Sesión</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section with Soft Gradient and Modern Typography -->
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-teal-50 via-white to-blue-50 opacity-90"></div>
        <div class="relative z-10 text-center max-w-2xl px-6">
            <h1 class="text-5xl font-bold text-gray-800 mb-6 leading-tight tracking-tight">Transforma tus Ideas en Realidad</h1>
            <p class="text-xl text-gray-600 mb-10 leading-relaxed">Conecta, Aprende y Crece con una Comunidad de Emprendedores Apasionados</p>
            <a href="/admin" class="inline-block px-8 py-3 bg-teal-500 text-white rounded-full text-lg font-semibold shadow-lg hover:bg-teal-600 transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                Comenzar Ahora
            </a>
        </div>
    </div>

    <!-- Features Section with Soft Animations -->
    <div class="container mx-auto py-20 px-6">
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2">
                <div class="text-teal-500 text-4xl mb-6">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Crecimiento Estratégico</h3>
                <p class="text-gray-600 leading-relaxed">Descubre herramientas y estrategias innovadoras para impulsar tu emprendimiento con precisión y creatividad.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2">
                <div class="text-teal-500 text-4xl mb-6">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Comunidad Colaborativa</h3>
                <p class="text-gray-600 leading-relaxed">Construye conexiones significativas con emprendedores que comparten tu pasión y visión.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2">
                <div class="text-teal-500 text-4xl mb-6">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Oportunidades Conjuntas</h3>
                <p class="text-gray-600 leading-relaxed">Explora y desarrolla colaboraciones que expandan los límites de tu emprendimiento.</p>
            </div>
        </div>
    </div>

    <!-- Footer with Soft Design -->
    <footer class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <p class="text-gray-500 mb-4">© 2024 Emprende. Todos los derechos reservados.</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors duration-300">
                    <i class="fab fa-facebook-square text-2xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors duration-300">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-teal-500 transition-colors duration-300">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>