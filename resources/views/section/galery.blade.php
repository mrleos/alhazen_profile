
<section id="gallery" class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-2 text-center">
            <h3 class="text-lg font-semibold text-primary">OUR GALLERY</h3>
        </div>
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-dark-teal md:text-4xl">Galeri Pembelajaran Alhazen Academy</h2>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Gallery Item 1 -->
            
            @foreach ($galleries as $item)
            <div class="group relative overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl">
                <img src="{{ asset('storage/' .$item->image) }}" alt="Pembelajaran 4" 
                     class="h-64 w-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-dark-teal bg-opacity-0 transition-all duration-300 group-hover:bg-opacity-75">
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <h4 class="mb-2 text-xl font-bold text-white">{{ $item->title }}</h4>
                        <p class="px-4 text-center text-white">{{ $item->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
