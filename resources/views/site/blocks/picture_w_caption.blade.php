<figure class="picture-caption">

@if($block->input('caption_above') && $block->translatedInput('caption'))
        <figcaption class="caption-above">{{ $block->translatedInput('caption') }}</figcaption>
    @endif

    <img src="{{ $block->image('picture', 'desktop') }}" alt="{{ $block->translatedInput('caption') }}">


    @if(!$block->input('caption_above') && $block->translatedInput('caption'))
        <figcaption class="caption-below">{{ $block->translatedInput('caption') }}</figcaption>
    @endif
</figure>

@push('block_styles')
    <link rel="stylesheet" href="{{ asset('css/picture-caption.css') }}">
@endpush
