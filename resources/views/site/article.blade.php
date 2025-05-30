@extends('site.layouts.app')

@section('content')

        <div class="mx-auto md:max-w-4xl max-w-1xl">
            {!! $item->renderBlocks() !!}
        </div>


@endsection
