

@section('content')
    <div class="container">
        <article>
            <header>
                <h1>{{ $article->title }}</h1>
                @if($article->subtitle)
                    <h2>{{ $article->subtitle }}</h2>
                @endif

                <div class="date">{{ $article->publish_start_date }}</div>

            </header>

            <div class="article-content">
                {!! $article->renderBlocks() !!}
            </div>
        </article>
    </div>
@endsection
