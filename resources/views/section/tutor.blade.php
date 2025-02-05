<section class="tutor-section bg-primary-light py-16">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl text-dark-teal font-bold mb-12">Belajar Bersama Tutor <span class="text-accent">EXPERT</span></h2>
    <div class="relative">
      <!-- Left Arrow -->
      <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-md hover:bg-gray-200" id="prevTutor">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-accent">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </button>
      <!-- Tutor Card -->
      @foreach ($tutors as $tutor)
          
      <div class="tutor-card  p-8 mx-auto max-w-5xl flex items-center">
        <div class="tutor-image flex-shrink-0 mr-12">
          <img
            src="{{ asset('storage/'. $tutor->image) }}"
            alt="{{ $tutor->name }}"
            class="rounded-2xl w-56 h-56 border-4 border-accent object-cover"
          />
        </div>
        <div class="tutor-info text-left">
          <h3 class="text-3xl font-semibold">{{ $tutor->name }}</h3>
          <p class="text-xl text-gray-600">{{ $tutor->position }}</p>
          <ul class="mt-6 space-y-3">
            @foreach ($tutor->experience as $exp)
            <li class="flex items-start">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 text-green-500 mr-3"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12.75l6 6 9-13.5"
                />
              </svg>
              {{ $exp['experience'] }}
            </li>          
            @endforeach
          </ul>
        </div>
      </div>

      @empty($tutor)
        <h1>Masih kosong kocag</h1>    
      @endempty

      @endforeach
      <!-- Right Arrow -->
      <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-md hover:bg-gray-200" id="nextTutor">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-accent">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </button>
    </div>
  </div>
</section>


<script>
  const tutors = [
    { name: "Reza Malik", role: "Alhazen Academy Lead Tutor", details: ["Asesor Rekayasa Perangkat Lunak", "Ex Backend Developer Magento-based Ecommerce Website", "Coding Tutor sejak 2016"], image: "/path/to/tutor-image.jpg" },
    // Add more tutor objects here
  ];

  let currentTutor = 0;

  function updateTutor() {
    const tutor = tutors[currentTutor];
    document.querySelector(".tutor-image img").src = tutor.image;
    document.querySelector(".tutor-image img").alt = tutor.name;
    document.querySelector(".tutor-info h3").textContent = tutor.name;
    document.querySelector(".tutor-info p").textContent = tutor.role;

    const detailsList = document.querySelector(".tutor-info ul");
    detailsList.innerHTML = "";
    tutor.details.forEach(detail => {
      const li = document.createElement("li");
      li.className = "flex items-start";
      li.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500 mr-3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>
        ${detail}
      `;
      detailsList.appendChild(li);
    });
  }

  document.getElementById("prevTutor").addEventListener("click", () => {
    currentTutor = (currentTutor - 1 + tutors.length) % tutors.length;
    updateTutor();
  });

  document.getElementById("nextTutor").addEventListener("click", () => {
    currentTutor = (currentTutor + 1) % tutors.length;
    updateTutor();
  });
</script>
