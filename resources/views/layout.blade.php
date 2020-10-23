<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
        @yield('header')
        <div class="meu-rodape">
            <div class="container-fluid">
  		        <div class="row">
  			        <div class="col-sm-2">
                        <i class="fab fa-wolf-pack-battalion"></i>
                        <a href="{{route('index')}}">Inicio</a>
  			        </div>
  			        <div class="col-sm-2">
  				        <i class="fab fa-wolf-pack-battalion"></i>
                        <a href="{{route('noticias')}}">Noticias</a>
  			        </div>
                    <div class="col-sm-2">
  				        <i class="fab fa-wolf-pack-battalion"></i>
                        <a href="{{route('empresa')}}">Empresa</a>
  			        </div>
                    <div class="col-sm-2">
  				        <i class="fab fa-wolf-pack-battalion"></i>
                        <a href="{{route('ondeEstamos')}}">Onde Estamos</a>
  			        </div>
                    <div class="col-sm-2">
  				        <i class="fab fa-wolf-pack-battalion"></i>
                        <a href="{{route('contactos')}}">Contactos</a>
  			        </div>
                      <div class="col-sm-2">
  				        <i class="fab fa-wolf-pack-battalion"></i>
                        <a href="{{route('formulario')}}">Formulario</a>
  			        </div>
  		        </div>
            </div>
        </div>
        @yield('conteudo')
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>