<section class="tutor-section bg-primary-light py-16">
  <div class="container mx-auto text-center px-4">
    <h2 class="text-4xl text-dark-teal font-bold mb-4">Belajar Bersama Tutor 
      <span class="text-primary bg-primary bg-clip-text text-transparent">EXPERT</span>
    </h2>
    <p class="text-gray-600 mb-12 max-w-2xl mx-auto">Tingkatkan kemampuanmu bersama para tutor professional kami</p>
    
    <div class="relative">
      <!-- Left Arrow -->
      <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:bg-gray-50 hover:shadow-xl transition-all duration-300 z-10 focus:outline-none focus:ring-2 focus:ring-primary" id="prevTutor">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-primary">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </button>

      <!-- Tutor Cards Container -->
      <div class="overflow-hidden mx-12">
        <div class="tutor-carousel flex transition-transform duration-500 ease-out">
          @foreach ($tutors as $tutor)
          <div class="tutor-card flex-none w-full p-8">
            <div class="mx-auto max-w-5xl flex flex-col md:flex-row items-center bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 hover:shadow-xl">
              <div class="tutor-image flex-shrink-0 md:mr-12 mb-6 md:mb-0">
                <div class="relative">
                  <div class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-2xl blur opacity-25"></div>
                  <img
                    src="{{ asset('storage/'. $tutor->image) }}"
                    alt="{{ $tutor->name }}"
                    class="relative rounded-2xl w-48 h-48 md:w-56 md:h-56 border-4 border-white object-cover shadow-lg"
                  />
                </div>
              </div>
              <div class="tutor-info text-left">
                <h3 class="text-2xl md:text-3xl font-bold text-dark-teal mb-2">{{ $tutor->name }}</h3>
                <p class="text-lg md:text-xl text-primary font-medium mb-4">{{ $tutor->position }}</p>
                <div class="h-px w-full bg-gradient-to-r from-primary to-secondary opacity-30 mb-6"></div>
                <ul class="mt-4 space-y-4">
                  @foreach ($tutor->experience as $exp)
                  <li class="flex items-start">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-primary-light flex items-center justify-center mr-3">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="w-4 h-4 text-dark-teal"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4.5 12.75l6 6 9-13.5"
                        />
                      </svg>
                    </span>
                    <span class="text-gray-600">{{ $exp['experience'] }}</span>
                  </li>          
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Right Arrow -->
      <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:bg-gray-50 hover:shadow-xl transition-all duration-300 z-10 focus:outline-none focus:ring-2 focus:ring-primary" id="nextTutor">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-primary">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </button>
    </div>
  </div>
</section>
