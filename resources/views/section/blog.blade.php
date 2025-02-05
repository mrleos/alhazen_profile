<section class="bg-gray-100 py-16 md:py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Blog Terbaru</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Artikel 1 -->
            @foreach ($article as $item)
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
<<<<<<< HEAD
                <img class="w-full h-48 object-cover" src="blog-image-1.jpg" alt="Blog 1">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Judul Artikel Pertama</h3>
                    <p class="text-gray-600 mt-2">Ringkasan singkat dari artikel ini untuk menarik perhatian pembaca.</p>
                    <a href="/article" class="mt-4 inline-block text-dark-teal font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
            <!-- Artikel 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="blog-image-2.jpg" alt="Blog 2">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Judul Artikel Kedua</h3>
                    <p class="text-gray-600 mt-2">Ringkasan singkat dari artikel ini untuk menarik perhatian pembaca.</p>
                    <a href="/article" class="mt-4 inline-block text-dark-teal font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
            <!-- Artikel 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="blog-image-3.jpg" alt="Blog 3">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Judul Artikel Ketiga</h3>
                    <p class="text-gray-600 mt-2">Ringkasan singkat dari artikel ini untuk menarik perhatian pembaca.</p>
                    <a href="/article" class="mt-4 inline-block text-dark-teal font-semibold hover:underline">Baca Selengkapnya</a>
=======
                <img class="w-full h-48 object-cover" src="{{ asset('storage/' .$item->image) }}" alt="Blog 1">
                <div class="p-6 text-justify">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h3>
                    <p class="text-gray-600 mt-2">{!! Str::limit($item->content, 255, '...') !!}</p>
                    <a href="#" class="mt-4 inline-block text-dark-teal font-semibold hover:underline">Baca Selengkapnya</a>
>>>>>>> 5ae05481792f324d260f65a53b2bec2aa0855ba6
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>