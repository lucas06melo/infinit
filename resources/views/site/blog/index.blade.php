@extends('layouts.app')

@section('title', 'Blog')
	
@section('content')
<div class="container" style="margin-top: 90px">
  <legend class="text-info"><b>BLOG</b></legend>
</div>

<div class="container">
<div class="row">
    <div class="col-md-12 col-lg-12">
    @forelse($posts as $post)
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding: 0 15px 0px 0px;"> 
                        <div style="display: block; overflow:hidden; max-width:20%; float: left; margin: 0 20px 0 0; ">
                        <img src="{{ asset("assets/img/uploads/posts/$post->imagemdestaque") }}" alt="{{ $post->legendaimagem }}" class="img-responsive pull-left">
                        </div> 
                            <h4><a href="{{ url("/noticia/$post->slug") }}" >{{$post->titulo}}</a></h4><hr>
                            <div class="text-muted">{{ date('d/m/Y - H:m', strtotime($post->created_at))}}</div>
                            <h5>{{$post->resumo}}</h5>
                        </div> 
                </div>
            </div>
        </div>
  @empty
<div class="alert alert-danger"><em> Nenhuma noticia cadastrada</em></div>
  @endforelse
    </div>
</div>
</div>

<div class="container">
  <div class="text-center">{{ $posts->links() }}</div>
</div>
<div class="visible-xs" style="margin-bottom: 20px;"></div>
@endsection