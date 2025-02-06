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
            <h2 class="text-3xl font-bold text-dark-teal md:text-4xl">Kenapa harus Alhazen Academy?</h2>
        </div>

        <!-- Grid Container -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            @foreach ($whyAlhazen as $item)
        
            <div class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                    {!! $item->svg !!}
                </div>
                <h3 class="mb-3 text-xl font-semibold text-dark-teal">{{ $item->title }}</h3>
            </div>

            @endforeach
            <!-- Card 2 -->
            <div class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138" />
                    </svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-dark-teal">Dapat Sertifikat</h3>
            </div>

            <!-- Card 3 -->
            <div class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-dark-teal">Dapat Materi Silabus</h3>
            </div>

            <!-- Card 4 -->
            <div class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-dark-teal">Kesempatan Berpartisipasi di Event Hackathon</h3>
            </div>

            <!-- Card 5 -->
            <div class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-dark-teal">Dashboard Report Proses Belajar</h3>
            </div>

            <!-- Card 6 -->
            <div class="rounded-lg bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl backdrop-blur-sm bg-white/50">
                <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-dark-teal">Sesi 1 on 1 antara Murid dan Pengajar</h3>
            </div>
        </div>
    </div>
</section>