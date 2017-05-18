@extends('layouts.admin')

@section('title', 'Artigos')

@section('content')
<div class="container">
@if(Session::has('success'))
    <div class="alert alert-success"><span class="fa fa-check"></span><em> {!! session('success') !!}</em></div>
@endif
    <h3>Artigos</h3>
    <div class="row">
    <div class="col-md-12" style="margin-bottom: 10px;padding-right: 35px;">
        <a class="btn btn-success pull-right" href= "{{ url ('/painel/posts/create') }}">Novo</a>
    </div>
</div>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Tipo</th>
      <th>Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  @forelse($posts as $post)
    <tr>
      <td scope="row">{{ str_limit($post->titulo, 50) }}</td>
      <td>{{ ($post->tipo == 0) ? 'Pagina' : 'Noticia' }}</td>
      <td>{{ ($post->status == 0) ? 'Rascunho' : 'Publicado' }}</td>
      <td><a class="btn btn-warning" href="{{ url ("/painel/posts/edit/$post->id") }}">Editar</a> | <a class="btn btn-danger" href="{{ url ("/painel/posts/delete/$post->id") }}">Excluir</a></td>
    </tr>
    @empty
    <tr>
      <td colspan="90"><p>Nenhum resultado</p></td>
    </tr>
    @endforelse
  </tbody>
</table>

{{ $posts->links() }}
</div>

@endsection
