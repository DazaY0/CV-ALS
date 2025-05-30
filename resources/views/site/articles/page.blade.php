@extends('site.layouts.article')

@php
    $articles = \App\Models\Article::where('published', true)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
@endphp

@section('content')
    <div class="mx-auto md:max-w-4xl max-w-1xl">
        {!! $item->renderBlocks() !!}
    </div>

    <div class="latest-articles-block border-[#e5e7eb] border-solid border-2 rounded-2xl py-8 mx-auto md:max-w-5xl max-w-2xl">
        @if($articles->count() > 0)
            <div id="articlesCarousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-96 overflow-hidden rounded-lg">
                    @foreach($articles as $index => $article)
                        <div class="absolute inset-0 duration-700 ease-in-out {{ $index === 0 ? '' : 'hidden' }}" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                            <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-md overflow-hidden h-full w-full">
                                @if($article->hasImage('cover'))
                                    <div class="md:w-1/2 h-48 md:h-full">
                                        <img class="w-full h-full object-cover"
                                             src="{{ $article->image('cover') }}"
                                             alt="{{ $article->title }}"
                                             loading="lazy">
                                    </div>
                                @endif
                                <div class="p-6 md:p-8 md:w-1/2 flex flex-col justify-center">
                                    <div class="text-gray-500 text-sm mb-3">
                                        {{ $article->created_at->format('d. F Y') }}
                                    </div>
                                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                                        {{ $article->title }}
                                    </h3>
                                    @if($article->description)
                                        <p class="text-gray-700 mb-4 text-sm md:text-base">
                                            {{ Str::limit($article->description, 120) }}
                                        </p>
                                    @endif
                                    <a href="{{ route('articles.page', $article->slug) }}" class="inline-flex items-center text-gray-900 font-medium group">
                                        Read more
                                        <span class="ml-2 w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-gray-900 flex items-center justify-center group-hover:translate-x-1 transition-transform text-xs md:text-base">
                                            →
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-1/2 -translate-y-1/2 left-4 z-30 flex items-center justify-center h-10 w-10 rounded-full bg-gray-800/70 hover:bg-gray-800/90 focus:outline-none focus:ring-4 focus:ring-gray-300 transition-all"
                        data-carousel-prev>
                    <span class="sr-only">Previous</span>
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </button>
                <button type="button"
                        class="absolute top-1/2 -translate-y-1/2 right-4 z-30 flex items-center justify-center h-10 w-10 rounded-full bg-gray-800/70 hover:bg-gray-800/90 focus:outline-none focus:ring-4 focus:ring-gray-300 transition-all"
                        data-carousel-next>
                    <span class="sr-only">Next</span>
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </button>

                <!-- Indicators (optional) -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    @foreach($articles as $index => $article)
                        <button type="button"
                                class="w-3 h-3 rounded-full {{ $index === 0 ? 'bg-white' : 'bg-white/50' }}"
                                aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $index + 1 }}"
                                data-carousel-slide-to="{{ $index }}">
                        </button>
                    @endforeach
                </div>
            </div>
        @else
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-8 text-center max-w-4xl mx-auto">
                <p class="text-gray-900">Keine Artikel verfügbar.</p>
            </div>
        @endif
    </div>

    <!-- Flowbite Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endsection
