@extends('site.layouts.app')

@section('content')

        <div class="md:max-w-4xl max-w-lg mx-auto ">
            {!! $item->renderBlocks() !!}
        </div>


@endsection
