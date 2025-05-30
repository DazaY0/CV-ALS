<div class="audio-player-block">
    @php
        if(isset($block))
        $audioFile = $block->file('audio_file');
    @endphp
    @if($block->translatedInput('title'))
        <h3 class="audio-title">{{ $block->translatedInput('title') }}</h3>
    @endif

    @if($audioFile)
        <audio controls class="w-full">
            <source src="{{$audioFile}}" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>

    @endif
</div>
