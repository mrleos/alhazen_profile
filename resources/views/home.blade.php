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
   <nav class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-sm shadow-lg">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 md:px-8 lg:px-12">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="transition hover:opacity-80">
                    <img src="/image/logo.png" alt="Logo Alhazen Academy" class="h-8 sm:h-10">
                </a>
            </div>

            <!-- Navigation Links - Centered -->
            <d iv class="hidden md:flex md:absolute md:left-1/2 md:-translate-x-1/2 md:gap-8 lg:gap-10">
                <a href="#home"
                    class="group relative text-sm font-medium text-dark-teal/90 transition-colors hover:text-dark-teal lg:text-base">
                    Home
                    <span
                        class="absolute -bottom-1.5 left-0 h-0.5 w-0 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#tentang"
                    class="group relative text-sm font-medium text-dark-teal/90 transition-colors hover:text-dark-teal lg:text-base">
                    Tentang Kami
                    <span
                        class="absolute -bottom-1.5 left-0 h-0.5 w-0 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#kelas"
                    class="group relative text-sm font-medium text-dark-teal/90 transition-colors hover:text-dark-teal lg:text-base">
                    Kelas
                    <span
                        class="absolute -bottom-1.5 left-0 h-0.5 w-0 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#gallery"
                    class="group relative text-sm font-medium text-dark-teal/90 transition-colors hover:text-dark-teal lg:text-base">
                    Galeri
                    <span
                        class="absolute -bottom-1.5 left-0 h-0.5 w-0 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#tutor"
                    class="group relative text-sm font-medium text-dark-teal/90 transition-colors hover:text-dark-teal lg:text-base">
                    Mentor
                    <span
                        class="absolute -bottom-1.5 left-0 h-0.5 w-0 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#testimoni"
                    class="group relative text-sm font-medium text-dark-teal/90 transition-colors hover:text-dark-teal lg:text-base">
                    Testimoni
                    <span
                        class="absolute -bottom-1.5 left-0 h-0.5 w-0 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </d>

            <!-- Right Section: Button and Mobile Menu -->
            <div class="flex items-center gap-6">
                <!-- Button (hidden on mobile) -->
                <a href="{{ route('ppdb') }}"
                    class="hidden md:inline-flex items-center justify-center rounded-full bg-dark-teal px-6 py-2.5 text-sm font-normal text-white transition-all duration-300 hover:bg-primary/90 hover:shadow-[0_8px_30px_rgb(237,138,56,0.3)] lg:text-base">
                    <span class="relative">
                        Info PPDB
                    </span>
                </a>

                <!-- Mobile Menu Button -->
                <button class="relative group p-2 text-white transition-colors hover:text-primary md:hidden">
                    <div
                        class="absolute inset-0 -z-10 rounded-lg bg-white/10 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    </div>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="home" class="bg-primary-light py-24 relative min-h-screen">
        <div class="container mx-auto px-6 sm:px-8 md:px-12 lg:px-16">
            <div class="relative mb-16 overflow-hidden">
                <div class="flex snap-x snap-mandatory overflow-x-hidden scroll-smooth">
                    <!-- Banner 1 -->
                    @foreach($courses as $course)
                    <div class="min-w-full flex-none snap-center px-4">
                        <div class="relative overflow-hidden rounded-2xl bg-white shadow-lg">
                            <img src="{{asset('storage/'.$course->image)}}" alt="{{ $course->title }}"
                                class="h-[200px] w-full object-cover sm:h-[300px] md:h-[400px]">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 p-6 text-center">
                                <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-4xl">
                                    {{ $course->title }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <!-- Banner 2 -->
                    <div class="min-w-full flex-none snap-center px-4">
                        <div class="relative overflow-hidden rounded-2xl bg-white shadow-lg">
                            <img src="/image/banner2.jpg" alt="Belajar Roblox"
                                class="h-[200px] w-full object-cover sm:h-[300px] md:h-[400px]">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 p-6 text-center">
                                <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-4xl">
                                    Belajar Roblox
                                </h2>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 3 -->
                    <div class="min-w-full flex-none snap-center px-4">
                        <div class="relative overflow-hidden rounded-2xl bg-white shadow-lg">
                            <img src="/image/banner3.jpg" alt="Game Development"
                                class="h-[200px] w-full object-cover sm:h-[300px] md:h-[400px]">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 p-6 text-center">
                                <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-4xl">
                                    Game Development
                                </h2>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Navigation Buttons -->
                <button
                    class="absolute left-4 top-1/2 -translate-y-1/2 rounded-full bg-white/80 p-2 shadow-lg transition hover:bg-white"
                    onclick="this.parentElement.querySelector('.snap-x').scrollBy({left: -window.innerWidth, behavior: 'smooth'})">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button
                    class="absolute right-4 top-1/2 -translate-y-1/2 rounded-full bg-white/80 p-2 shadow-lg transition hover:bg-white"
                    onclick="this.parentElement.querySelector('.snap-x').scrollBy({left: window.innerWidth, behavior: 'smooth'})">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Dots indicator -->
                <div class="absolute bottom-4 left-1/2 flex -translate-x-1/2 gap-2">
                    <button class="h-2 w-2 rounded-full bg-white/60 transition hover:bg-white"
                        onclick="this.parentElement.parentElement.querySelector('.snap-x').scrollTo({left: 0, behavior: 'smooth'})">
                    </button>
                    <button class="h-2 w-2 rounded-full bg-white/60 transition hover:bg-white"
                        onclick="this.parentElement.parentElement.querySelector('.snap-x').scrollTo({left: window.innerWidth, behavior: 'smooth'})">
                    </button>
                    <button class="h-2 w-2 rounded-full bg-white/60 transition hover:bg-white"
                        onclick="this.parentElement.parentElement.querySelector('.snap-x').scrollTo({left: window.innerWidth * 2, behavior: 'smooth'})">
                    </button>
                </div>
            </div>

            <!-- Hero Content -->
            @foreach ($hero as $item)
                <div class="grid items-center gap-8 md:grid-cols-2 md:gap-12 lg:gap-16">
                    <!-- Left Content -->
                    <div class="text-center md:text-left">
                        <h1 class="mb-4 text-4xl font-extrabold text-white sm:text-5xl md:text-6xl lg:text-7xl">
                            {{ $item->title }}
                        </h1>
                        <p class="mb-6 text-lg text-dark-teal opacity-90 sm:text-xl md:mb-8 md:text-2xl">
                            {{ $item->content }}
                        </p>
                        <a href="#kelas"
                            class="inline-block rounded-full bg-yellow-400 px-6 py-3 text-lg font-semibold text-dark-teal shadow-lg transition-all duration-300 hover:scale-110 hover:bg-white hover:text-yellow-500">
                            🚀 Mulai Belajar Sekarang!
                        </a>
                    </div>

                    <!-- Right Content - Cartoon Illustration -->
                    <div class="relative">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Student Learning"
                            class="h-auto w-full max-w-md transition-all sm:max-w-lg md:max-w-none">
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Divider (Clouds) -->
        <div class="absolute bottom-0 left-0 right-0 h-16 overflow-hidden sm:h-20 md:h-24">
            <!-- First cloud layer -->
            <svg class="absolute bottom-2 left-0 w-full transform sm:bottom-3 md:bottom-4"
                xmlns="http://www.w3.org/2000/svg" version="1.1" height="100" viewBox="0 0 100 100"
                preserveAspectRatio="none">
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


    <div class="fixed bottom-10 right-8 z-50 flex items-center sm:bottom-14 sm:right-12">
        <!-- WhatsApp Button with Hover Group -->
        <a href="https://wa.me/+6282291134131" target="_blank"
            class="group relative flex h-14 w-14 items-center justify-center rounded-full bg-green-500 text-white shadow-lg transition-all hover:scale-110 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:h-20 sm:w-20">
            <!-- Hover Label -->
            <div class="absolute right-full mr-2 hidden transform group-hover:block sm:mr-4">
                <div
                    class="whitespace-nowrap rounded-lg bg-white px-2 py-1 text-xs font-medium text-gray-700 shadow-lg sm:px-4 sm:py-2 sm:text-sm">
                    <div class="relative">
                        Hubungi Kami
                        <!-- Arrow -->
                        <div
                            class="absolute -right-5 top-1/2 h-2 w-2 -translate-y-1/2 rotate-45 transform bg-white sm:-right-7 sm:h-3 sm:w-3">
                        </div>
                    </div>
                </div>
            </div>

            <!-- WhatsApp Icon -->
            <svg class="h-6 w-6 sm:h-10 sm:w-10" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
            </svg>
        </a>
    </div>
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
