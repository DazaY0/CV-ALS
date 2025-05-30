<div class="block-list">
    <h3 class="block-list-title">{{ $block->translatedInput('title') }}</h3>
    <ul class="block-list-items">
        @foreach ($block->children as $item)
            <li class="block-list-item">{!! $item->translatedInput('content') !!}</li>
        @endforeach
    </ul>
</div>
