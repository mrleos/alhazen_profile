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
            <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">{{ $detail->title }}</h1>
            
        </div>
        
        <div class="mb-12 flex justify-center">
            <img src="{{ asset('storage/'. $detail->image) }}" alt="Kelas Pemrograman Web" class="w-[1000px] h-[500px] object-cover rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
        </div>

        <div class="prose max-w-none mb-12 text-justify leading-relaxed">
            <p>{!! $detail->detail_page !!}</p>
        </div>

        <!-- Related Classes -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Kelas Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($latestCourse as $item)
                <a href="{{ route('course.detail', $item->id) }}">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div>
                        <img src="{{ asset('storage/'. $item->image) }}" alt="Kelas Python" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-3 text-gray-900">{{ $item->title }}</h3>
                        <p class="text-gray-600 mb-4 text-sm">{!! Str::limit($item->content, 150, '...') !!}</p>
                    </div>
                </div></a>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md mt-12 p-6 text-center">
        <p class="text-gray-600">&copy; 2025 Alhazen Academy. All Rights Reserved.</p>
    </footer>
</body>

</html>
