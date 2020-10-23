@extends('layout')
<br>
@section('titulo')
Destaques
@endsection
@section('header')
@endsection
@section('conteudo')
<h1 style="color: red"> Destaque Semanal </h1>
<br>
<img src="{{asset('imagens/maria.jpg')}}">
<br><br>
<h5>Outras revistas/ Jornais digitais</h5>
@foreach($sites as $site)
    <h6><a href="{{$site}}">{{$site}}</h6>
@endforeach
@endsection