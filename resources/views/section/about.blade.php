<section id="tentang" class="relative bg-white py-16 md:py-24 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 z-0">
        <!-- Top-left orange circle -->
        <div class="absolute -left-16 -top-30 w-64 h-64 bg-orange-100/50 rounded-full animate-pulse-slow"></div>

        <!-- Top-right square -->
        <div class="absolute top-20 right-20 w-8 h-8 border-2 border-orange-300 animate-spin-slow"></div>

        <!-- Small circles pattern -->
        <div class="absolute top-32 right-32 w-40 h-40 animate-float"
            style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 10px 10px;">
        </div>

        <!-- Bottom-left square -->
        <div class="absolute bottom-40 left-20 w-6 h-6 border-2 border-emerald-300 animate-float-reverse"></div>

        <!-- Bottom-right circle -->
        <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-emerald-50/30 rounded-full animate-pulse-slow"></div>

        <!-- Small floating elements -->
        <div class="absolute top-1/4 left-1/3 w-4 h-4 bg-blue-200/50 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 right-1/3 w-4 h-4 bg-yellow-200/50 rounded-full animate-float-reverse"></div>

        <!-- Additional floating elements -->
        <div class="absolute top-1/3 right-1/4 w-3 h-3 border border-purple-300 animate-spin-slow"></div>
        <div class="absolute bottom-1/3 left-1/4 w-3 h-3 bg-pink-200/50 rounded-full animate-float"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="mb-3 text-center text-primary">
            <h3>OUR UNIQUE APPROACH</h3>
        </div>
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-dark-teal md:text-4xl">Kenapa harus Alhazen Kendari?</h2>
        </div>

        <!-- Grid Container -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            @foreach ($whyAlhazen as $item)

                <div
                    class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                        {!! $item->svg !!}
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-dark-teal">{{ $item->title }}</h3>
                </div>

            @endforeach
        </div>
    </div>
</section>