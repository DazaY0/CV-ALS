
@if($block->input('center'))
    <div class="flex items-center flex-row gap-1  justify-evenly">
        @foreach($block->children as $child)

            @include('site.blocks.' . $child->type, ['block' => $child])

        @endforeach




    </div>
@else
    <div class="flex gap-1 justify-evenly">
        @foreach($block->children as $child)
            @include('site.blocks.' . $child->type, ['block' => $child])
        @endforeach
    </div>
@endif
