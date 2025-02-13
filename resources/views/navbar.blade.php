<nav class="fixed inset-x-0 top-0 z-50 bg-white shadow-md">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 md:px-8 lg:px-12">
        <a href="/">
            <img src="/image/logo.png" alt="Logo Alhazen Academy" class="h-12 sm:h-14">
        </a>

        <!-- Navigation Links (Desktop) -->
        <div class="hidden md:flex md:gap-6 lg:gap-8">
            <a href="#home" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Home</a>
            <a href="#tentang" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Tentang Kami</a>
            <a href="#kelas" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Kelas</a>
            <a href="#gallery" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Galeri</a>
            <a href="#testimoni" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Testimoni</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="p-2 md:hidden">
            <svg id="menu-icon" class="h-8 w-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu (Perbaikan: Tambahkan kelas 'flex' di sini) -->
    <div id="mobile-menu" class="hidden flex-col items-center gap-4 bg-white py-4 shadow-md md:hidden">
        <a href="#home" class="text-sm text-gray-600 transition hover:text-primary">Home</a>
        <a href="#tentang" class="text-sm text-gray-600 transition hover:text-primary">Tentang Kami</a>
        <a href="#kelas" class="text-sm text-gray-600 transition hover:text-primary">Kelas</a>
        <a href="#gallery" class="text-sm text-gray-600 transition hover:text-primary">Galeri</a>
        <a href="#testimoni" class="text-sm text-gray-600 transition hover:text-primary">Testimoni</a>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script>
