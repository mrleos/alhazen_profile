<section id="kelas" class="bg-primary-light py-16 md:py-24 relative overflow-hidden">
  <!-- Gambar Pesawat Sebagai Background -->
  <div class="absolute inset-0">
    <img src="/image/airplane.png" alt="plane" class="w-full h-full object-cover opacity-35 ">
  </div>

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <!-- Section Header -->
    <div class="mb-2 text-center text-dark-teal">
      <h3 class="text-lg font-semibold">OUR CLASS</h3>
    </div>
    <div class="mb-12 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
        Pilih Kelas Yang Cocok Untukmu
      </h2>
    </div>

    <!-- Grid Container -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Kelas 1 -->
      @foreach ($courses as $course)
        <div class="group max-w-xs mx-auto">
          <div class="relative rounded-2xl overflow-hidden bg-white shadow-lg transition duration-300 hover:shadow-xl">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-hijau-500 to-yellow-500"></div>

            <div class="p-6 text-center">
              <div class="mb-4 flex justify-center">
                <img src="{{ asset('storage/' . $course->image) }}" alt="kelas 1"
                  class="w-16 h-16 bg-purple-50 rounded-full">
              </div>

              <h3 class="text-xl font-semibold text-dark-teal mb-3">{{ $course->title }}</h3>

              <p class="text-gray-600 mb-4 text-sm">
                {{ Str::limit($course->description, 150, '...') }}
              </p>

              <button
                class="mt-6 w-full bg-dark-teal text-white py-3 rounded-xl transition duration-300 hover:bg-dark-teal/90 focus:outline-none focus:ring-2 focus:ring-hijau-500 focus:ring-offset-2">
                Pilih Kelas
              </button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
