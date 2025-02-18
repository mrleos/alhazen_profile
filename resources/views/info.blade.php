<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/app.js"></script>
  <title>Info PPDB 2025</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans text-gray-900">
  <!-- Navbar -->
  @include('.navbar')

  <!-- Main Content -->
  <main class="max-w-5xl mx-auto mt-16 px-6 py-12">
    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold text-gray-900 relative inline-block">
        Info PPDB
        <span class="block h-1 bg-dark-teal w-24 mx-auto mt-2"></span>
      </h1>
    </div>
    <!-- Banner -->
    <div class="mb-12 flex justify-center">
      <img src="{{ asset('storage/'.$pendaftaran->image) }}" alt="PPDB 2025"
        class="w-full max-w-4xl h-[450px] object-cover rounded-2xl shadow-lg transition-transform duration-300">
    </div>

    <!-- Description -->
    <div class="prose max-w-none text-center text-lg text-gray-700 leading-relaxed">
      <p>{{ $pendaftaran->deskripsi }}</p>
    </div>

    <!-- Timeline Pendaftaran -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Persyaratan Pendaftaran</h2>
      <div class="overflow-hidden rounded-xl shadow-lg">
        <table class="min-w-full bg-white">
          <thead>
            <tr class="bg-dark-teal text-white">
              <th class="py-4 px-6 text-center text-lg font-semibold">Peryaratan</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-300">
            @foreach ($pendaftaran->persyaratan as $syarat)
            <tr class="hover:bg-primary-light/30 transition">
              <td class="py-4 px-6">{{ $syarat['persyaratan'] }}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </main>

  <!-- Footer -->
  {{-- @include('.footer') --}}
</body>

</html>
