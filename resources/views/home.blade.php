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
                <a href="#gallery" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Galeri</a>
                <a href="#testimoni" class="text-sm text-gray-600 transition hover:text-primary l">testimoni </a>
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
            @foreach ($hero as $item)
            <div class="grid items-center gap-8 md:grid-cols-2 md:gap-12 lg:gap-16">
                <!-- Left Content -->
                <div class="text-center md:text-left">
                    <h1 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:mb-6 md:text-5xl lg:text-6xl">
                        {{ $item->title }}
                    </h1>
                    <p class="mb-6 text-base text-white opacity-90 sm:text-lg md:mb-8 md:text-xl">
                        {{ $item->content }}
                    </p>
                    <a href="#"
                        class="inline-block rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-primary shadow-lg transition hover:bg-secondary hover:text-white sm:px-8 sm:py-3 md:text-base lg:px-10 lg:py-4">
                        Mulai Belajar
                    </a>
                </div>

                <!-- Right Content - Image -->
                <div class="relative mt-8 md:mt-0">
                    <div class="relative mx-auto max-w-md overflow-hidden rounded-xl sm:max-w-lg md:max-w-none">
                        <img src="{{ asset('storage/' .$item->image) }}" alt="Student Coding" class="h-full w-full object-cover object-center"
                            loading="lazy">
                    </div>
                </div>
                @endforeach

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

    <!-- tutor section -->
    @include('section.tutor')

    <!-- Testimonial Section -->
    @include('section.testimoni')

    <!-- Blog Section -->
    @include('section.blog')

    <!-- Footer -->
     @include(' footer')
</body>

</html>