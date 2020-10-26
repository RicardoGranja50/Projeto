@extends('layout')
<br>
@section('titulo')
CMTV2.0
@endsection
@section('header')
@endsection
@section('conteudo')
<h1 style="color: red"> Capas Revistas / Jornais diários </h1>
<br>
<div class="meu-rodape">
    <div class="container-fluid">
  		<div class="row">
  			<div class="col-sm-3">
                <img src="{{asset('imagens/jn.jpg')}}">
  			</div>
            <div class="col-sm-3">
            <img src="{{asset('imagens/correio.jpg')}}">
  			</div>
                <div class="col-sm-3">
            <img src="{{asset('imagens/maria1.jpg')}}">
  			</div>
        </div>
    </div>
</div>
    <br>
    <div class="meu-rodape">
        <div class="container-fluid">
  		    <div class="row">
  			    <div class="col-sm-3">
                    <h4> <a href="https://www.jn.pt/">Jornal Noticias</h4>
  			    </div>
                <div class="col-sm-3">
                    <h4> <a href="https://www.cmjornal.pt/">Correio da Manha</h4>
  			    </div>
                  <div class="col-sm-3">
                  <h4> <a href="https://www.maria.pt/'">Maria</h4>
  			    </div>
            </div>
        </div>
    </div>
    <br>
    <div>
@endsection