<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/app.js"></script>
    <title>Detail Kelas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    @include('.navbar')


    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-24 px-4 py-8">
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Kelas Pemrograman Web</h1>
            
        </div>
        
        <div class="mb-12 flex justify-center">
            <img src="/image/class_example.jpg" alt="Kelas Pemrograman Web" class="w-[1000px] h-[500px] object-cover rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
        </div>

        <div class="prose max-w-none mb-12 text-justify leading-relaxed">
            <p>Pelajari dasar-dasar pemrograman web dengan HTML, CSS, dan JavaScript. Kelas ini dirancang untuk pemula yang ingin memahami konsep dasar dalam membangun sebuah website.</p>
        </div>

        <!-- Related Classes -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Kelas Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div>
                        <img src="/image/class_1.jpg" alt="Kelas Python" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-3 text-gray-900">Kelas Python</h3>
                        <p class="text-gray-600 mb-4 text-sm">Belajar bahasa pemrograman Python dari dasar hingga mahir.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div>
                        <img src="/image/class_2.jpg" alt="Kelas Data Science" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-3 text-gray-900">Kelas Data Science</h3>
                        <p class="text-gray-600 mb-4 text-sm">Memahami konsep dasar dalam Data Science dan Machine Learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md mt-12 p-6 text-center">
        <p class="text-gray-600">&copy; 2025 Alhazen Academy. All Rights Reserved.</p>
    </footer>
</body>

</html>
