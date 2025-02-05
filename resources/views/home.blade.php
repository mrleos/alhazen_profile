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
                <a href="#home" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Home</a>
                <a href="#tentang" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Tentang
                    Kami</a>
                <a href="#kelas" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Kelas</a>
                <a href="#galery" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Galeri</a>
                <a href="#testimoni" class="text-sm text-gray-600 transition hover:text-primary l"></a>
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
        class="relative min-h-[100svh] bg-gradient-to-br from-primary to-primary-light pt-12 sm:pt-16 md:pt-20 lg:pt-20">
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
                        class="inline-block rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-primary shadow-lg transition hover:bg-secondary hover:text-white sm:px-8 sm:py-3 md:text-base lg:px-10 lg:py-4">
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
    @include('section.about')
    <!-- Kelas Section -->
    @include('section.class')

    <!-- Galery Section -->
    @include('section.galery')

    <!-- Testimonial Section -->
    @include('section.testimoni')

    <!-- Footer -->
    <footer class="bg-dark-teal text-white pt-16 pb-8 mt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo dan Deskripsi -->
                <div class="md:col-span-2">
                    <a href="/" class="mb-6 inline-block">
                        <img src="/image/logo2.png" alt="Logo Alhazen Academy" class="h-12">
                    </a>
                    <p class="text-sm opacity-90 leading-relaxed">
                        Alhazen Academy adalah lembaga kursus coding & animasi terkemuka di Kendari yang berkomitmen
                        memberikan pendidikan teknologi berkualitas dengan metode pembelajaran modern.
                    </p>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Hubungi Kami</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Jl. Pendidikan No. 123<br>Kendari, Sulawesi Tenggara
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@alhazen.ac.id
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            (0401) 123 4567
                        </li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div>
                    <h3 class="text-lg font-semibold mb-6">Follow Kami</h3>
                    <div class="flex space-x-4">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/alhazenacademy/" target="_blank"
                            class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/alhazenacademy/" target="_blank"
                            class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/alhazen-academy" target="_blank"
                            class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>

                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@alhazenacademy/videos" target="_blank"
                            class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </a>
                        i
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/20 mt-12 pt-8 text-center">
                <p class="text-sm opacity-75">
                    © 2024 Alhazen Academy. All rights reserved.<br>
                    Developed with ❤️ in Kendari
                </p>
            </div>
        </div>
    </footer>

</body>

</html>