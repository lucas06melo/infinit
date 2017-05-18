@extends('layouts.app')

@section('title', 'Error 404')

@section('content')
<style type="text/css">
    #block_error{
      width: 845px;
      height: 384px;
      border: 1px solid #cccccc;
      margin: 72px auto 0;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      background: #fff url(../../assets/img/errors/404-3.png) no-repeat 40px 51px;
  }
  #block_error div{
      padding: 100px 40px 0 186px;
  }
  #block_error div h2{
      color: #218bdc;
      font-size: 24px;
      display: block;
      padding: 0 0 14px 0;
      border-bottom: 1px solid #cccccc;
      margin-bottom: 12px;
      font-weight: normal;
  }
</style>
<div class="container" id="block_error" style="margin-top: 100px;margin-bottom: 50px;">
        <div>
         <h2>Essa página não existe.</h2>
        <p>
        A página que você tentou acessar não existe ou pode ter sido removida.
        </p>
        <p>
        Você pode ir para a <a href="/">página inicial</a> e continuar a sua navegação.
        </p>
        </div>
    </div>

@endsection