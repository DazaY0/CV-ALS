<div class="download-file-container">
    @php
        if(isset($block))
        $download = $block->file('download_file');
    @endphp



    @if($download)
        <a href="{{$download}}" download class="w-full flex items-center p-4 text-gray-900 hover:text-blue-600 transition-colors no-underline gap-2">
            @if($block->translatedInput('title'))
                <h3 class="text-lg font-medium">{{ $block->translatedInput('title') }}</h3>
            @endif
                <span class="text-gray-400">--</span>
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
        </a>
    @endif
</div>
