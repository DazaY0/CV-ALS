@php
    $articles = \App\Models\Article::where('published', true)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
@endphp

<div class="latest-articles-block">


    @if($block->input('show_title') && $block->input('title'))
        <h2 class="section-title">{{ $block->input('title') }}</h2>
    @endif

    @if($articles->count() > 0)
        @foreach($articles as $article)
            <div class="news-card">
                @if($article->hasImage('cover'))  {{-- Correct method name here --}}
                <div class="news-image">
                    <img
                        src="{{ $article->image('cover') }}"
                        alt="{{ $article->title }}"
                        loading="lazy"
                    >
                </div>
                @endif
                <div class="news-content">
                    <div class="date">
                        {{ $article->created_at->format('d. F Y') }}
                    </div>
                    <div class="content">
                        {{ $article->title }}
                    </div>
                    @if($article->description)
                        <div class="description">
                            {{ Str::limit($article->description, 150) }}
                        </div>
                    @endif
                    <a href="{{ route('articles.page', $article->slug) }}" class="arrow-link">
                        <span class="arrow"></span>
                    </a>
                </div>

            </div>
        @endforeach
    @else
        <div class="news-card">
            <div class="news-content">
                <div class="content">
                    Keine Artikel verfügbar.
                </div>
            </div>
        </div>
    @endif

    <a href="{{ route('articles.index', "") }}" class="">Mehr article</a>
</div>
