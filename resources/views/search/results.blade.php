@extends('site.layouts.app')

@section('content')
    <div class="mx-auto md:max-w-4xl max-w-1xl">
        @if(App::getLocale() === 'en')
            <h1>Search Results for "{{ $query }}"</h1>

            @if($articles->isEmpty() && $pages->isEmpty())
                <p>No results found.</p>
            @else
                @if(!$articles->isEmpty())
                    <h2>Articles</h2>
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="{{ route('articles.page', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                                <p>{{ Str::limit($article->description, 150) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if(!$pages->isEmpty())
                    <h2>Pages</h2>
                    <ul>
                        @foreach($pages as $page)
                            <li>
                                <a href="{{ route('frontend.page', $page->slug) }}">
                                    {{ $page->title }}
                                </a>
                                <p>{{ Str::limit($page->description, 150) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endif

        @elseif(App::getLocale() === 'de')
            <h1>Suchergebnisse für "{{ $query }}"</h1>

            @if($articles->isEmpty() && $pages->isEmpty())
                <p>Keine Ergebnisse gefunden.</p>
            @else
                @if(!$articles->isEmpty())
                    <h2>Artikel</h2>
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="{{ route('articles.page', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                                <p>{{ Str::limit($article->description, 150) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if(!$pages->isEmpty())
                    <h2>Seiten</h2>
                    <ul>
                        @foreach($pages as $page)
                            <li>
                                <a href="{{ route('frontend.page', $page->slug) }}">
                                    {{ $page->title }}
                                </a>
                                <p>{{ Str::limit($page->description, 150) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endif

        @else
            <h1>Risultati della ricerca per "{{ $query }}"</h1>

            @if($articles->isEmpty() && $pages->isEmpty())
                <p>Nessun risultato trovato.</p>
            @else
                @if(!$articles->isEmpty())
                    <h2>Articoli</h2>
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="{{ route('articles.page', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                                <p>{{ Str::limit($article->description, 150) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if(!$pages->isEmpty())
                    <h2>Pagine</h2>
                    <ul>
                        @foreach($pages as $page)
                            <li>
                                <a href="{{ route('frontend.page', $page->slug) }}">
                                    {{ $page->title }}
                                </a>
                                <p>{{ Str::limit($page->description, 150) }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endif
        @endif
    </div>
@endsection
