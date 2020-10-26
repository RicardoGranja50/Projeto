@extends('layout')
@section('header')
<BR>
@endsection
@section('conteudo')
    @if($password==$adpass && $nome==$adnome)
    <p>Logado</p>
    @else
    <p>Utilizador inválido</p>
    @endif
@endsection