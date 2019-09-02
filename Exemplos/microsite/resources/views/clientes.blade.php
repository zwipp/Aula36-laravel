@extends('layouts.master')



@section('titulo')
    clientes
@endsection

@section('conteudo')
    <h1>vc esta na pagina de clientes</h1>
    <h2>esses sao nossos melhores clientes</h2>
    <ul class="clientes">
        <li>microsoft</li>
        <li>apple</li>
        <li>google</li>
        @foreach ($clientes as $c)
            <li> {{$c}} </li>
        @endforeach
    </ul>

    <marquee>nosso cliente do mes é {{$clienteDoMes}} </marquee>
    <span>site feito por {{$nome}}</span> <!-- {} imprimir na tela o que estiver dentro -->

@endsection

