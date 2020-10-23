@extends('layout')
<br>
@section('titulo')
Loggin
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
                    <input type="text" name="pass">
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
                    <button type="submit"> CONFIRM </button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection