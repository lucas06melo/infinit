@extends('layouts.admin')

@section('title', 'Criar Artigo')

@section('sumcss')
<link href="{{ asset('assets/js/scripts/summernote/summernote.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" style="margin-top: 10px">
<h3>Criar Artigo</h3><hr>

@include('layouts.errors')

{!! Form::open(['url' => '/painel/posts/store', 'method'=>'POST', 'files' => 'true']) !!}

                    <div class="form-group">
                        {!! Form::label('tipo','Selecione') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::select('tipo', ['0'=>'Pagina','1'=>'Noticia'], null, ['class'=>'form-control', 'placeholder' => 'Escolha uma opção...', 'required']); !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::label('titulo','Titulo') !!}<i style="color: #FF0000;">*</i>
                                {!! Form::text('titulo',null,['class'=>'form-control nome','placeholder'=>'Titulo', 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('subtitulo','Subtitulo') !!}
                        {!! Form::text('subtitulo',null,['class'=>'form-control','placeholder'=>'Subtitulo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('texto','Texto') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::textarea('texto',null,['class'=>'form-control','placeholder'=>'Texto']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('resumo','Resumo') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::text('resumo',null,['class'=>'form-control','placeholder'=>'Resumo', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('imagemdestaque','Imagem') !!}
                        {!! Form::file('imagemdestaque', ['id'=>'imagemdestaque']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('legendaimagem','Legenda') !!}
                        {!! Form::text('legendaimagem',null,['class'=>'form-control','placeholder'=>'Legenda']) !!}
                    </div>
                    <div class="form-group">
                    	{!! Form::label('Status') !!}<i style="color: #FF0000;">*</i><br>
                    	{!! Form::radio('status','1') !!} Publicado<br>
						{!! Form::radio('status','0') !!} Rascunho
                    </div><hr>
                    <div class="form-group">
                        {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
</div>

@endsection

    @section('jquery')
        <script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript"></script>
    @endsection
    @section('summ')
        <script src="{{ asset('assets/js/scripts/summernote/summernote.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/scripts/summernote/init-a.js') }}" type="text/javascript"></script>
    @endsection