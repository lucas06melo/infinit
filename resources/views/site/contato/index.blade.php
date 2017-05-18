@extends('layouts.app')

@section('title', 'Contato')

@section('content')
<div class="container" style="margin-top: 100px">
<h3>Contato</h3><hr>

@if(Session::has('success'))
    <div class="alert alert-success"><span class="fa fa-check"></span><em> {!! session('success') !!}</em></div>
@endif

@include('layouts.errors')

{!! Form::open(['url' => '/contato/enviar', 'method'=>'POST']) !!}
{{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::label('tipo','Selecione') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::select('tipo', ['Quero ser patrocinador'=>'Quero ser patrocinador','Quero ser parceiro'=>'Quero ser parceiro','Quero mais informações'=>'Quero mais informações','Quero visitar a FINIT'=>'Quero visitar a FINIT'], null, ['class'=>'form-control', 'placeholder' => 'Escolha uma opção...', 'required']); !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::label('nome','Nome') !!}<i style="color: #FF0000;">*</i>
                                {!! Form::text('nome',null,['class'=>'form-control nome','placeholder'=>'Nome', 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','E-mail') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'exemplo@email.com', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('assunto','Assunto') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::text('assunto',null,['class'=>'form-control','placeholder'=>'Assunto', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefone','Telefone') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::text('telefone',null,['class'=>'form-control','placeholder'=>'(31) 90000-0000', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('message','Mensagem') !!}<i style="color: #FF0000;">*</i>
                        {!! Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Mensagem', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
</div>

@endsection