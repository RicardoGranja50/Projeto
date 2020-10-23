<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public $sites=[
        'https://www.maria.pt/',
        'https://www.jn.pt/',
        'https://www.cmjornal.pt/'
    ];
    public function index(){
        return view('index', ['sites'=>$this->sites]);
    }
    
    public function contactos(){
        return view('contactos');
    }

    public function emrpresa(){
        return view('empresa');
    }

    public function noticias(){
        return view('noticias');
    }

    public function ondeEstamos(){
        return view('onde-estamos');
    }

    public function formulario(){
        return view('formulario');
    }

    public function enviado(Request $r){
        $nome = $r->nome;
        $pass = $r->pass;
        return view('enviado', [
            'nome'=>$nome,
            'password'=>$pass
        ]);
    }
}
