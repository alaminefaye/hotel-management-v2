<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxury Hotel Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-title {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-blue-600">LuxStay</span>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#rooms" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Nos Chambres</a>
                    <a href="#services" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Réserver</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative h-screen">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb" alt="Hotel background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="text-center">
                <h1 class="hero-title text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                    Bienvenue au LuxStay
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300">
                    Découvrez le luxe et le confort dans notre établissement 5 étoiles
                </p>
                <div class="mt-10">
                    <a href="#rooms" class="inline-block bg-blue-600 px-8 py-3 text-base font-medium text-white hover:bg-blue-700 rounded-md transition duration-300">
                        Découvrir nos chambres
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Nos Services
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Une expérience unique pour votre séjour
                </p>
            </div>
            <div class="mt-20 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-medium text-gray-900">Spa & Bien-être</h3>
                    <p class="mt-2 text-base text-gray-600 text-center">
                        Profitez de notre spa luxueux et de nos soins relaxants
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-medium text-gray-900">Restaurant Gastronomique</h3>
                    <p class="mt-2 text-base text-gray-600 text-center">
                        Une cuisine raffinée préparée par nos chefs étoilés
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-medium text-gray-900">Conciergerie 24/7</h3>
                    <p class="mt-2 text-base text-gray-600 text-center">
                        Un service personnalisé à votre disposition
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Contactez-nous
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Notre équipe est à votre disposition
                </p>
            </div>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                    <div class="bg-gray-50 rounded-lg p-8">
                        <h3 class="text-lg font-medium text-gray-900">Informations</h3>
                        <dl class="mt-4 space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Adresse</dt>
                                <dd class="mt-1 text-sm text-gray-900">123 Avenue du Luxe, 75008 Paris</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Téléphone</dt>
                                <dd class="mt-1 text-sm text-gray-900">+33 1 23 45 67 89</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-sm text-gray-900">contact@luxstay.com</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-8">
                        <h3 class="text-lg font-medium text-gray-900">Horaires d'ouverture</h3>
                        <dl class="mt-4 space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Réception</dt>
                                <dd class="mt-1 text-sm text-gray-900">24h/24, 7j/7</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Restaurant</dt>
                                <dd class="mt-1 text-sm text-gray-900">7h00 - 23h00</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Spa</dt>
                                <dd class="mt-1 text-sm text-gray-900">9h00 - 20h00</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-base text-gray-400">
                    &copy; {{ date('Y') }} LuxStay. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
