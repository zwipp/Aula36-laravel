<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class PagesController extends Controller
{
    public function gethome(){
        return view('home');
    }

    public function getclientes($pos){
        $clientes = Cliente::all();
        $clienteDoMes = $clientes[$pos];
        $nome = 'sergio';
        return view('clientes',[
            'nome'=>$nome, 
            'clientes'=>$clientes,
            'clienteDoMes'=>$clienteDoMes]);
    }

    public function getcontatos(){
        return view('contatos'); //nome do arquivo qe ele vai puxar
    }

}
