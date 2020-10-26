@extends('layout')
<br>
@section('titulo')
CMTV2.0
@endsection
@section('header')
@endsection
@section('conteudo')
    <br><br>
    <form method="post" action="{{route('enviado')}}">
        @csrf
    <div class="meu-rodape">
        <div class="container-fluid">
  		    <div class="row">
  			    <div class="col-sm-3">
                    <label for="nome"> Name </label>
                    <input type="text" name="nome">
  			    </div>
                <div class="col-sm-3">
                    <label for="pass"> Password</label>
                    <input type="password" name="pass">
  			    </div>
                <div class="col-sm-3">
                    <select>
                        @foreach($sites as $chave=> $site)
                            <option value={{$chave}}> {{$chave}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-3">
                    <button class="btn btn-primary" type="submit"> CONFIRM </button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection