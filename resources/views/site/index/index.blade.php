@extends('layouts.app')

@section('title', 'Home')
	
@section('content')
<div class="header"><div class="visible-xs" style="margin-top: 70px;"></div> <img class="header" src="{{ asset('assets/img/banner.png') }}" alt="Banner Save The Date"></div>

<div class="container" style="margin-top: 50px;">
	<div class="col-md-6">
		<div class="text-justify"><h4>VEM AÍ A #FINIT2017!</h4>
<p>Após o grande sucesso da primeira edição, Minas Gerais se prepara para receber, entre os dias 31 de outubro e 5 de novembro, em Belo Horizonte, a 2ª edição da FINIT (Feira Internacional de Negócios, Inovação e Tecnologia), no Expominas.</p>

<p>A FINIT reúne, em um só lugar, grandes e consolidados eventos e um público bem diverso, composto por startups, grandes empresas, estudantes, pesquisadores, profissionais da área de tecnologia e interessados pelo tema. O evento comportará, na edição de 2017, a segunda Campus Party Minas Gerais, repleta de atividades para os campuseiros mineiros; a Arena de Negócios, conectando grandes empresas e startups; e a Arena Experience, promovendo atividades de divulgação científica por parte de centenas de instituições nacionais.</p>

<p>A FINIT é uma iniciativa pioneira do governo de Minas Gerais, que traz conceituados eventos nacionais e internacionais para a capital mineira. #SavetheDate!</p>

		</div>
	</div>
	<div class="col-md-6">
	  <iframe width="100%" height="420px" src="https://www.youtube.com/embed/ZEJBG8rLmUY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0"></iframe>
	</div>
</div>

<div class="col-md-12 text-center visible-lg visible-md visible-sm" style="padding: 0;margin-top: 50px;">
	<img src="{{ asset('assets/img/index/numeros.png') }}" class="img-responsive" alt="Numeros FINIT"><br/>
</div>
<div class="col-md-12 text-center visible-xs" style="padding: 0;margin-top: 50px;">
	<img src="{{ asset('assets/img/index/numeros-xs.png') }}" class="img-responsive" alt="Numeros FINIT">
</div>

<div class="container" style="margin-top: 50px;">
	<div class="col-md-6">
		<div class="text-justify">
			<h4>O EXPOMINAS</h4>
<p>O Expominas é um dos maiores centros de convenções de Belo Horizonte, comportando aproximadamente 45 mil pessoas e abrigando grandes eventos que acontecem na capital mineira. O espaço, que possui área de 27 mil metros quadrados, fica localizado na Avenida Amazonas (uma das vias mais importantes da cidade) e é o único centro de convenções da América Latina ligado diretamente a uma estação de metrô (Estação Gameleira).</p>
		</div>
	</div>
	<div class="col-md-6">
		<img src="{{ asset('assets/img/index/expominas.jpg') }}" class="img-responsive" alt="Expominas">
	</div>
</div><hr>

<div class="container text-center" style="margin-top: 40px;margin-bottom: 30px;">
<h3 class="text-center" style="margin-bottom: 30px;"><b>BLOG</b></h3>
<div class="row">
@forelse($posts as $post)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ asset("assets/img/uploads/posts/$post->imagemdestaque") }}" alt="{{ $post->legendaimagem }}" title="{{ $post->legendaimagem }}">
      <div class="caption">
        <h4>{{$post->titulo}}</h4><hr>
        <p>{{str_limit($post->resumo, 130)}}</p>
        <p><a href="{{ url("/noticia/$post->slug") }}" class="btn btn-primary" role="button">Leia mais</a></p>
      </div>
    </div>
  </div>
  @empty
<div class="alert alert-danger"><em> Nenhuma noticia cadastrada</em></div>
  @endforelse
</div>
</div><hr>

<div class="container text-center" style="margin-top: 40px;margin-bottom: 30px;">
<h4 class="text-center" style="margin-bottom: 30px;"><b>VEJA COMO FOI A FINIT 2016</b></h4>
	<div class="col-md-12">
		<div class="text-center">
			<div class="text-center" id="flickrembed"></div>
		</div>
	</div>
</div>
<div class="visible-xs" style="margin-bottom: 20px;"></div>
@endsection