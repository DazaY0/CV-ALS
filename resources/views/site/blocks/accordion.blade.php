@php
    if(isset($block))$accordionId = 'accordion-' . $block->id;
@endphp

<div id="{{ $accordionId }}" class="accordion {{ $block->input('opened') ? 'is-open' : '' }}" data-accordion>
    <div class="accordion__header">
        <h3 class="accordion__title">{{ $block->translatedInput('title') }}</h3>
        <button class="accordion__toggle"
                aria-expanded="{{ $block->input('opened') ? 'true' : 'false' }}"
                data-target="#{{ $accordionId }}-content">
        <span class="sr-only">Toggle</span>
            <svg class="icon icon--plus" aria-hidden="true" viewBox="0 0 24 24">
                <path d="M12 4v16m-8-8h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    <div id="{{ $accordionId }}-content" class="accordion__content" {{ $block->input('opened') ? '' : 'hidden' }}>
    @foreach($block->children as $child)
            @include('site.blocks.' . $child->type, ['block' => $child])
        @endforeach
    </div>
</div>
@once
    @push('scripts')
        <script src="{{ asset('js/accordion.js') }}"></script>
    @endpush

    @push('block_styles')
        <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
    @endpush
@endonce

