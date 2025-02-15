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
        Info PPDB 2025
        <span class="block h-1 bg-dark-teal w-24 mx-auto mt-2"></span>
      </h1>
    </div>

    <!-- Banner -->
    <div class="mb-12 flex justify-center">
      <img src="/image/ppdb_banner.jpg" alt="PPDB 2025"
        class="w-full max-w-4xl h-[450px] object-cover rounded-2xl shadow-lg transition-transform duration-300">
    </div>

    <!-- Description -->
    <div class="prose max-w-none text-center text-lg text-gray-700 leading-relaxed">
      <p>Penerimaan Peserta Didik Baru (PPDB) 2025 telah dibuka! Simak timeline berikut untuk mengetahui tahapan dan
        jadwal penting.</p>
    </div>

    <!-- Timeline Pendaftaran -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Timeline Pendaftaran</h2>
      <div class="overflow-hidden rounded-xl shadow-lg">
        <table class="min-w-full bg-white">
          <thead>
            <tr class="bg-dark-teal text-white">
              <th class="py-4 px-6 text-left text-lg font-semibold">Tahapan</th>
              <th class="py-4 px-6 text-left text-lg font-semibold">Tanggal</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-300">
            <tr class="hover:bg-primary-light/30 transition">
              <td class="py-4 px-6">Pembukaan Pendaftaran</td>
              <td class="py-4 px-6">1 Maret 2025</td>
            </tr>
            <tr class="hover:bg-primary-light/30 transition">
              <td class="py-4 px-6">Seleksi Administrasi</td>
              <td class="py-4 px-6">5 - 10 Maret 2025</td>
            </tr>
            <tr class="hover:bg-primary-light/30 transition">
              <td class="py-4 px-6">Tes Seleksi</td>
              <td class="py-4 px-6">15 Maret 2025</td>
            </tr>
            <tr class="hover:bg-primary-light/30 transition">
              <td class="py-4 px-6">Pengumuman Hasil</td>
              <td class="py-4 px-6">20 Maret 2025</td>
            </tr>
            <tr class="hover:bg-primary-light/30 transition">
              <td class="py-4 px-6">Daftar Ulang</td>
              <td class="py-4 px-6">25 - 30 Maret 2025</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <!-- Footer -->
  {{-- @include('.footer') --}}
</body>

</html>
