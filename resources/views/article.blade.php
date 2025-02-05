<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknik Informatika UHO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="fixed inset-x-0 top-0 z-50 bg-white shadow-md">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 md:px-8 lg:px-12">
            <a href="/">
                <img src="/image/logo.png" alt="Logo Alhazen Academy" class="h-8 sm:h-10">
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex md:gap-6 lg:gap-8">
                <a href="/Home" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Home</a>
                <a href="/Home#tentang" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Tentang
                    Kami</a>
                <a href="/Home#kelas" class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Kelas</a>
                <a href="/Home#gallery"
                    class="text-sm text-gray-600 transition hover:text-primary lg:text-base">Galeri</a>
                <a href="/Home#testimoni" class="text-sm text-gray-600 transition hover:text-primary l">testimoni </a>
            </div>

            <!-- Mobile Menu Button (you can add functionality later) -->
            <button class="p-2 md:hidden">
                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-10 px-4 py-8">
        <!-- Article Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem iusto cum praesentium velit sequi
                fugit nihil eum ipsum mollitia quisquam magnam libero error, eius optio soluta quaerat qui totam
                deleniti? </h1>

            <!-- Author and Date -->
            <div class="flex items-center space-x-4 mb-6">
                <img src="https://placehold.co/50x50" alt="Author" class="w-12 h-12 rounded-full">
                <div>
                    <div class="font-medium text-gray-900">Admin</div>
                    <div class="text-sm text-gray-500">Published: 17 Januari 2024</div>
                </div>
            </div>
        </div>

        <!-- Main Image -->
        <div class="mb-8">
            <img src="https://placehold.co/800x400" alt="Pameran Kewirausahaan" class="w-full rounded-lg shadow-lg">
        </div>

        <!-- Article Content -->
        <div class="prose max-w-none mb-8">
            <p class="">
                Mahasiswa Program Studi Teknik Informatika Universitas Halu Oleo (UHO) sukses menggelar Pameran
                Kewirausahaan di Lab Riset Dasar, Jumat (17/01/2024). Kegiatan ini merupakan bagian dari program
                pengembangan kewirausahaan mahasiswa dengan fokus pada inovasi yang merefleksikan kearifan lokal
                Sulawesi Tenggara (Sultra).
            </p>

            <p class="">
                Ketua Panitia, Andri Anugrah Kustin, mengungkapkan bahwa pameran ini bertujuan untuk menyalurkan hasil
                karya mahasiswa sebagai bukti nyata dari pembelajaran yang mereka terima selama perkuliahan. "Ini juga
                menjadi ajang kreativitas mahasiswa dalam menciptakan produk inovatif yang dapat bersaing di pasar
                lokal," ujarnya.
            </p>

            <h2 class="text-xl font-bold text-gray-900 mt-8 mb-4">Rincian Kegiatan:</h2>
            <ul class="list-disc pl-6 mb-6 text-gray-700">
                <li class="">Koleksi: Generasi mahasiswa dan inovasi karya mahasiswa</li>
                <li class="">Ketersediaan Fasilitas: Fasilitas lengkap baik dari fasilitas fisik</li>
                <li class="">Jenis Digital dan Games: Jadi fokus keluaran teknologi virtual memberikan pemateri di
                    Sultra</li>
            </ul>

            <p class="">
                "Pameran ini berlangsung mulai pukul 08.00 hingga 15.00 WITA, dan terbuka untuk umum. Dengan
                mengutamakan teknologi inovatif yang juga mengangkat kearifan lokal, acara ini diharapkan dapat
                mengembangkan semangat kewirausahaan di kalangan mahasiswa," tutupnya.
            </p>
        </div>

        <!-- Related Posts Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Artikel Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Post 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/400x200" alt="Post Terkait" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Workshop Pemrograman Python</h3>
                        <p class="text-sm text-gray-600 mb-4">Pelajari dasar-dasar pemrograman Python untuk pemula...
                        </p>
                        <a href="#" class="text-dark-teal font-medium hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/400x200" alt="Post Terkait" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Seminar Cyber Security</h3>
                        <p class="text-sm text-gray-600 mb-4">Teknik terbaru dalam menjaga keamanan sistem informasi...
                        </p>
                        <a href="#" class="text-dark-teal font-medium hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/400x200" alt="Post Terkait" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Pelatihan UI/UX Design</h3>
                        <p class="text-sm text-gray-600 mb-4">Membuat desain antarmuka yang user-friendly...</p>
                        <a href="#" class="text-dark-teal font-medium hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Comments Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Komentar</h2>

            <!-- Add Comment Form -->
            <div class="mb-8 bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Leave a Comment</h2>

                <div class="mb-4">
                    <textarea
                        class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-dark-teal resize-none"
                        rows="4" placeholder="Write your comment..."></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name *
                        </label>
                        <input type="text" id="name"
                            class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-dark-teal"
                            placeholder="Your name">
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email *
                        </label>
                        <input type="email" id="email"
                            class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-dark-teal"
                            placeholder="Your email">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button
                        class="px-6 py-2 bg-dark-teal text-white rounded-lg hover:bg-dark-teal/80 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Post Comment
                    </button>
                </div>
            </div>
            <!-- Comments List -->
            <div class="space-y-6">
                <!-- Comment 1 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-start space-x-4">
                        <img src="https://placehold.co/40x40" alt="User" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium text-gray-900">Ussername</h3>
                                <span class="text-sm text-gray-500">2 jam yang lalu</span>
                            </div>
                            <p class="mt-2 text-gray-700">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Nostrum, dolor qui incidunt quisquam in ratione perspiciatis iste dolores eos reiciendis
                                laboriosam vero doloribus, exercitationem minus. Iure qui hic voluptas excepturi.</p>
                        </div>
                    </div>
                </div>

                <!-- Comment 2 -->

            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('.footer')

</body>

</html>