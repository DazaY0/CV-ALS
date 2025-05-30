@extends('site.layouts.app')

@php
    $articles = \App\Models\Article::where('published', true)
        ->orderBy('created_at', 'desc')
        ->paginate(10); // Changed from take(3)->get() to paginate(10)
@endphp

@section('content')
<div class="latest-articles-block">
    <div class="articles-container">
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
    </div>

    @if($articles->hasMorePages())
        <div class="load-more-container">
            <button class="load-more-btn" data-next-page="{{ $articles->currentPage() + 1 }}">
                Mehr Artikel laden
            </button>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreBtn = document.querySelector('.load-more-btn');

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const nextPage = this.getAttribute('data-next-page');
                const url = new URL(window.location.href);
                url.searchParams.set('page', nextPage);

                fetch(url.toString())
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const newArticles = doc.querySelector('.articles-container').innerHTML;
                        const newLoadMoreBtn = doc.querySelector('.load-more-btn');

                        document.querySelector('.articles-container').insertAdjacentHTML('beforeend', newArticles);

                        if (newLoadMoreBtn) {
                            this.setAttribute('data-next-page', newLoadMoreBtn.getAttribute('data-next-page'));
                        } else {
                            this.parentElement.remove();
                        }
                    })
                    .catch(error => console.error('Error loading more articles:', error));
            });
        }
    });
</script>
@endsection
