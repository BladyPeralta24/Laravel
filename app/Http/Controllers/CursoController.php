<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CursoController extends Controller{

    public function index(){
        $diccionario = [['num' => 'uno'],['num' => 'dos'],['num' => 'tres']];
        return view('principal', ['dic' => $diccionario]);
    }
    
    public function create(){
        $num = 12;
        return view('contacto', ['doce' => $num]);
    }

    public function show(){
        return view('blog');
    }
}


?>