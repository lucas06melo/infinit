@extends('layouts.app')


@section('title')

{{ $post->titulo }}
@stop


@section('content')

@if($post)

    <div class="container" style="margin-top: 100px">
        <legend class="text-primary">{{ $post->titulo }}</legend>
        <p><b>Publicado:</b> {{ date('d/m/Y - H:m', strtotime($post->created_at)) }}</p>
        <div class="pull-left col-md-5">
            <div class="thumbnail">
                <img src="{{ asset("assets/img/uploads/posts/$post->imagemdestaque") }}" alt="{{ $post->legendaimagem }}">
            </div>
        </div>
        <div>
        {!!$post->texto!!}
        </div>
    </div> 
    @endif

@endsection