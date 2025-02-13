<section id="testimoni" class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-dark-teal md:text-4xl">Testimoni Dari Murid di Kendari</h2>
        </div>

        <!-- Testimonial Content -->
        <div class="flex flex-col md:flex-row gap-8 max-w-6xl mx-auto">
            <!-- Left Side - Image -->
            <div class="md:w-1/2">
                <div class="aspect-square w-full rounded-lg">
                    <img src="/image/hero.png" alt="Testimonial Image" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>

            <!-- Right Side - Testimonials -->
            <div class="md:w-1/2 space-y-6">
                <!-- Testimonial 1 -->
                @foreach ($testimonis as $testimoni)
                    
                <div class="bg-gray-100 p-6 rounded-lg">
                    <!-- Stars -->
                    <div class="flex mb-3">
                        @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $testimoni->rating)
                            <svg class="w-5 h-5 text-yellow-400 inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @else
                            <svg class="w-5 h-5 text-yellow-400 inline" fill="gray" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endif
                    @endfor
                    </div>
                    <!-- Testimonial Text -->
                    <p class="text-gray-600 mb-4">{{ $testimoni->description }}</p>
                    <!-- User -->
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-3" src="{{ asset('storage/' .$testimoni->image_profile) }}" alt="{{ $testimoni->name }}">
                        <span class="font-medium">{{ $testimoni->name }}</span>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>