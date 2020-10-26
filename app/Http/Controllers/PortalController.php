<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public $sites=[
        'maria'=>'https://www.maria.pt/',
        'jornal'=>'https://www.jn.pt/',
        'cm'=>'https://www.cmjornal.pt/'
    ];
    public function index(){
        return view('index', ['sites'=>$this->sites]);
    }
    
    public function contactos(){
        return view('contactos');
    }

    public function empresa(){
        return view('empresa');
    }

    public function noticias(){
        return view('noticias');
    }

    public function ondeEstamos(){
        return view('onde-estamos');
    }

    public function formulario(){
        return view('formulario', ['sites'=>$this->sites]);
    }

    public function enviado(Request $r){
        $adnome="Admin";
        $adpass=1234;
        $nome = $r->nome;
        $pass = $r->pass;
        return view('enviado', [
            'nome'=>$nome,
            'password'=>$pass,
            'adnome'=>$adnome,
            'adpass'=>$adpass,
        ]);
    }
}
