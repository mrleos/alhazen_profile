<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/app.js"></script>
    <title>Alhazein Academy Kendari</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans">
    <!-- Navbar -->
    <nav class="fixed inset-x-0 top-0 z-50 bg-white shadow-md">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 md:px-8 lg:px-12">
            <a href="/">
                <img src="/image/logo.png" alt="Logo Alhazen Academy" class="h-8 sm:h-10">
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex md:gap-6 lg:gap-8">
                <a href="#home" class="text-sm text-gray-600 transition hover:text-hijau-500 lg:text-base">Home</a>
                <a href="#tentang" class="text-sm text-gray-600 transition hover:text-hijau-500 lg:text-base">Tentang
                    Kami</a>
                <a href="#kelas" class="text-sm text-gray-600 transition hover:text-hijau-500 lg:text-base">Kelas</a>
            </div>

            <!-- Mobile Menu Button (you can add functionality later) -->
            <button class="p-2 md:hidden">
                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home"
        class="relative min-h-[100svh] bg-gradient-to-br from-primary to-hijau-200 pt-12 sm:pt-16 md:pt-20 lg:pt-20">
        <div class="container mx-auto px-4 py-8 sm:px-6 sm:py-12 md:px-8 lg:px-12">
            <div class="grid items-center gap-8 md:grid-cols-2 md:gap-12 lg:gap-16">
                <!-- Left Content -->
                <div class="text-center md:text-left">
                    <h1 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:mb-6 md:text-5xl lg:text-6xl">
                        Tempat Belajar Coding & Animasi Terbaik #1
                    </h1>
                    <p class="mb-6 text-base text-white opacity-90 sm:text-lg md:mb-8 md:text-xl">
                        Yuk Belajar Coding dan Animasi Bareng dengan metode belajar online, offline
                    </p>
                    <a href="#"
                        class="inline-block rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-hijau-500 shadow-lg transition hover:bg-yellow-300 hover:text-white sm:px-8 sm:py-3 md:text-base lg:px-10 lg:py-4">
                        Mulai Belajar
                    </a>
                </div>

                <!-- Right Content - Image -->
                <div class="relative mt-8 md:mt-0">
                    <div class="relative mx-auto max-w-md overflow-hidden rounded-xl sm:max-w-lg md:max-w-none">
                        <img src="/image/hero.png" alt="Student Coding" class="h-full w-full object-cover object-center"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <!-- Cloud Divider -->
        <div class="absolute bottom-0 left-0 right-0 h-16 overflow-hidden sm:h-20 md:h-24">
            <!-- First cloud layer -->
            <svg class="absolute bottom-2 left-0 w-full sm:bottom-3 md:bottom-4" xmlns="http://www.w3.org/2000/svg"
                version="1.1" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path fill="#fff" opacity="0.5" d="M-5 100 Q 0 20 5 100 Z
                                 M0 100 Q 5 0 10 100
                                 M5 100 Q 10 30 15 100
                                 M10 100 Q 15 10 20 100
                                 M15 100 Q 20 30 25 100
                                 M20 100 Q 25 -10 30 100
                                 M25 100 Q 30 10 35 100
                                 M30 100 Q 35 30 40 100
                                 M35 100 Q 40 10 45 100
                                 M40 100 Q 45 50 50 100
                                 M45 100 Q 50 20 55 100
                                 M50 100 Q 55 40 60 100
                                 M55 100 Q 60 60 65 100
                                 M60 100 Q 65 50 70 100
                                 M65 100 Q 70 20 75 100
                                 M70 100 Q 75 45 80 100
                                 M75 100 Q 80 30 85 100
                                 M80 100 Q 85 20 90 100
                                 M85 100 Q 90 50 95 100
                                 M90 100 Q 95 25 100 100
                                 M95 100 Q 100 15 105 100 Z">
                </path>
            </svg>

            <!-- Second cloud layer -->
            <svg class="absolute bottom-0 left-0 w-full" xmlns="http://www.w3.org/2000/svg" version="1.1" height="100"
                viewBox="0 0 100 100" preserveAspectRatio="none">
                <path fill="#fff" d="M-5 100 Q 0 20 5 100 Z
                                 M0 100 Q 5 0 10 100
                                 M5 100 Q 10 30 15 100
                                 M10 100 Q 15 10 20 100
                                 M15 100 Q 20 30 25 100
                                 M20 100 Q 25 -10 30 100
                                 M25 100 Q 30 10 35 100
                                 M30 100 Q 35 30 40 100
                                 M35 100 Q 40 10 45 100
                                 M40 100 Q 45 50 50 100
                                 M45 100 Q 50 20 55 100
                                 M50 100 Q 55 40 60 100
                                 M55 100 Q 60 60 65 100
                                 M60 100 Q 65 50 70 100
                                 M65 100 Q 70 20 75 100
                                 M70 100 Q 75 45 80 100
                                 M75 100 Q 80 30 85 100
                                 M80 100 Q 85 20 90 100
                                 M85 100 Q 90 50 95 100
                                 M90 100 Q 95 25 100 100
                                 M95 100 Q 100 15 105 100 Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="relative bg-white py-16 md:py-24 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Top-left orange circle -->
            <div class="absolute -left-16 -top-30 w-64 h-64 bg-orange-100/50 rounded-full animate-pulse-slow"></div>

            <!-- Top-right square -->
            <div class="absolute top-20 right-20 w-8 h-8 border-2 border-orange-300 animate-spin-slow"></div>

            <!-- Small circles pattern -->
            <div class="absolute top-32 right-32 w-40 h-40 animate-float"
                style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 10px 10px;">
            </div>

            <!-- Bottom-left square -->
            <div class="absolute bottom-40 left-20 w-6 h-6 border-2 border-emerald-300 animate-float-reverse"></div>

            <!-- Bottom-right circle -->
            <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-emerald-50/30 rounded-full animate-pulse-slow"></div>

            <!-- Small floating elements -->
            <div class="absolute top-1/4 left-1/3 w-4 h-4 bg-blue-200/50 rounded-full animate-float"></div>
            <div class="absolute bottom-1/4 right-1/3 w-4 h-4 bg-yellow-200/50 rounded-full animate-float-reverse">
            </div>

            <!-- Additional floating elements -->
            <div class="absolute top-1/3 right-1/4 w-3 h-3 border border-purple-300 animate-spin-slow"></div>
            <div class="absolute bottom-1/3 left-1/4 w-3 h-3 bg-pink-200/50 rounded-full animate-float"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="mb-3 text-center text-primary">
                <h3 class>OUR UNIQE APPROACH</h3>
            </div>
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">Kenapa Pilih Alzen Academy?</h2>
            </div>

            <!-- Grid Container -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900">Sub judul</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi libero, porttitor et maximus
                        vehicula, pretium at purus. Aenean pellentesque dui sit amet est viverra.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900">Sub judul</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi libero, porttitor et maximus
                        vehicula, pretium at purus. Aenean pellentesque dui sit amet est viverra.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900">Sub judul</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi libero, porttitor et maximus
                        vehicula, pretium at purus. Aenean pellentesque dui sit amet est viverra.
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900">Sub judul</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi libero, porttitor et maximus
                        vehicula, pretium at purus. Aenean pellentesque dui sit amet est viverra.
                    </p>
                </div>

                <!-- Card 5 -->
                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900">Sub judul</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi libero, porttitor et maximus
                        vehicula, pretium at purus. Aenean pellentesque dui sit amet est viverra.
                    </p>
                </div>

                <!-- Card 6 -->
                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900">Sub judul</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi libero, porttitor et maximus
                        vehicula, pretium at purus. Aenean pellentesque dui sit amet est viverra.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilihan Kelas Section -->
    <section id="kelas" class="bg-secondary py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mb-2 text-center text-primary">
                <h3 class>OUR CLASS</h3>
            </div>
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pilih Kelas Yang Cocok Untukmu
                </h2>
            </div>

            <!-- Grid Container -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3">
                <!-- Kelas 1 -->
                <div class="group max-w-xs mx-auto">
                    <div
                        class="relative rounded-2xl overflow-hidden bg-white shadow-lg transition duration-300 hover:shadow-xl">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-hijau-500 to-yellow-500">
                        </div>

                        <div class="p-6 text-center">
                            <div class="mb-4 flex justify-center">
                                <div class="p-4 bg-purple-50 rounded-full">
                                    <img src="" alt="kelas 1">
                                </div>
                            </div>

                            <h3 class="text-xl font-semibold text-gray-900 mb-3">
                                Sub Judul
                            </h3>

                            <p class="text-gray-600 mb-4 text-sm">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam deleniti beatae
                                nesciunt in! Accusantium repudiandae libero beatae provident, quod aut cumque
                                exercitationem aliquam cupiditate est in? Vitae ratione doloremque minus.
                            </p>

                            <button class="mt-6 w-full bg-hijau-600 text-white py-3 rounded-xl 
                            transition duration-300 
                            hover:bg-hijau-700 
                            focus:outline-none focus:ring-2 focus:ring-hijau-500 focus:ring-offset-2">
                                Pilih Kelas
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Kelas 2 -->
                <div class="group max-w-xs mx-auto">
                    <div
                        class="relative rounded-2xl overflow-hidden bg-white shadow-lg transition duration-300 hover:shadow-xl">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-hijau-500 to-yellow-500">
                        </div>

                        <div class="p-6 text-center">
                            <div class="mb-4 flex justify-center">
                                <div class="p-4 bg-purple-50 rounded-full">
                                    <img src="" alt="kelas 2">
                                </div>
                            </div>

                            <h3 class="text-xl font-semibold text-gray-900 mb-3">
                                Sub Judul
                            </h3>

                            <p class="text-gray-600 mb-4 text-sm">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde ipsam expedita
                                exercitationem ex laborum quo accusamus voluptatum laudantium aliquid maxime
                                perspiciatis delectus totam, illo necessitatibus fuga quas animi, quis quos! </p>

                            <button class="mt-6 w-full bg-hijau-600 text-white py-3 rounded-xl 
                            transition duration-300 
                            hover:bg-hijau-700 
                            focus:outline-none focus:ring-2 focus:ring-hijau-500 focus:ring-offset-2">
                                Pilih Kelas
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Kelas 3 -->
                <div class="group max-w-xs mx-auto">
                    <div
                        class="relative rounded-2xl overflow-hidden bg-white shadow-lg transition duration-300 hover:shadow-xl">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-hijau-500 to-yellow-500">
                        </div>

                        <div class="p-6 text-center">
                            <div class="mb-4 flex justify-center">
                                <div class="p-4 bg-purple-50 rounded-full">
                                    <img src="" alt="kelas 3">
                                </div>
                            </div>

                            <h3 class="text-xl font-semibold text-gray-900 mb-3">
                                Sub Judul
                            </h3>

                            <p class="text-gray-600 mb-4 text-sm">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, pariatur.
                                Exercitationem cum fugiat reiciendis non blanditiis error temporibus nesciunt officia
                                tenetur rem iure, quo vitae, aliquid unde ex cupiditate mollitia? </p>

                            <button class="mt-6 w-full bg-hijau-600 text-white py-3 rounded-xl 
                            transition duration-300 
                            hover:bg-hijau-700 
                            focus:outline-none focus:ring-2 focus:ring-hijau-500 focus:ring-offset-2">
                                Pilih Kelas
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galery Section -->
     <section id="galery" class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mb-2 text-center text-primary">
                <h3 class>OUR GALLERY
            </div>
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">Galeri pembelajaran alhazen Academy</h2>
            </div>

     </section>

    <!-- Footer -->
     
</body>

</html>