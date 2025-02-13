<section class="bg-primary-light py-16">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-dark-teal md:text-4xl">Artikel Terbaru</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($article as $item)
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <img class="w-full h-52 object-cover hover:opacity-90 transition-opacity"
                        src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                    <div class="p-6">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 line-clamp-2 hover:text-dark-teal">
                                {{ $item->title }}
                            </h3>
                            <p class="text-gray-600 mt-3 text-sm line-clamp-3">
                                {!! Str::limit($item->content, 150, '...') !!}
                            </p>
                        </div>
                        <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-100">
                            <span class="text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                            </span>
                            <a href="{{ route('article.detail', Crypt::encrypt($item->id)) }}"
                                class="text-dark-teal text-sm font-medium hover:text-primary transition-colors">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>