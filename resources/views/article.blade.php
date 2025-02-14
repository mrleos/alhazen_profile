<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @foreach ($article as $item)
    <title>{{ $item->title }}</title>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    @include('.navbar')
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-24 px-4 py-8"> <!-- Increased mt for navbar -->
        @foreach ($article as $item)
            <!-- Article Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $item->title }}
                </h1>

                <!-- Author and Date -->
                <div class="flex items-center space-x-5 mb-8">
                    <div>
                        <div class="font-medium text-gray-900 text-lg">{{ $item->author }}</div>
                        <div class="text-gray-500">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</div>
                    </div>
                </div>
            </div>

            <!-- Main Image -->
            <div class="mb-12 flex justify-center">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                    class="w-[1000px] h-[500px] object-cover rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
            </div>

            <!-- Article Content -->
            <div class="prose max-w-none mb-12 text-justify leading-relaxed">
                {!! $item->content !!}
            </div>
        @endforeach

        <!-- Related Posts -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Artikel Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($latest_article as $item)
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-3 text-gray-900 group-hover:text-primary transition-colors">
                                {{ $item->title }}</h3>
                            <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                                {!! Str::limit($item->content, 100, '...') !!}</p>
                            <a href="{{ route('article.detail', Crypt::encrypt($item->id)) }}"
                                class="inline-flex items-center text-primary font-medium hover:text-dark-teal transition-colors">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Comments -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Komentar</h2>
            <form id="formKomentar" class="mb-12" action="{{ route('comment.post') }}" method="POST">
                @csrf
                @foreach ($article as $item)
                <input type="hidden" name="article_id" value="{{ $item->id }}">
                @endforeach
                <div class="bg-white rounded-xl shadow-md p-8">
                    <textarea
                        class="w-full px-4 py-3 text-gray-700 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none"
                        rows="4" placeholder="Tulis komentar Anda..." id="comment" name="comment"></textarea>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="name">Nama *</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 text-gray-700 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="email">Email *</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 text-gray-700 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Email Anda">
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="px-8 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                            Kirim Komentar
                        </button>
                    </div>
                </div>
            </form>

            <!-- Comment List -->
            <div class="space-y-6">
                @foreach ($comments as $item)
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-start space-x-4">
                        <img src="https://placehold.co/40x40" alt="User" class="w-12 h-12 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="font-semibold text-gray-900">{{ $item->name }}</h3>
                                <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">{{ $item->comment }}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('.footer')

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const commentForm = document.getElementById('formKomentar');
        if (commentForm) {
            commentForm.addEventListener('submit', function (e) {
                Swal.fire({
                    title: 'Komentar Dalam Peninjauan',
                    text: 'Komentar Anda sedang menunggu persetujuan dari admin untuk memastikan kualitas diskusi.',
                    icon: 'info',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#0F766E',
                });
            });
        }
    });
</script>

</html>