@extends('layouts.app')

@section('titulo', 'Início')

@section('conteudo')
<div class="container text-center mt-5">
    <h1 class="display-4 fw-bold text-warning">Bem-vindo à Sunlight ☀️</h1>

    <p class="lead mt-3">
        Aqui a diversão brilha mais forte! Explore o universo dos games com promoções imperdíveis, lançamentos e muito mais.
    </p>

    <div class="mt-5">
        {{-- Carlos: esse botao vai levar ao catalogo --}}
        <a href="#" class="btn btn-sol btn-lg me-2">Ver Catálogo</a>

        {{-- pagina Sobre Nos --}}
        <a href="{{ route('sobre') }}" class="btn btn-outline-light btn-lg">Sobre Nós</a>
    </div>

    <div class="mt-0">
        <img src="{{ asset('imagens/paginas/sobre.png') }}"
             alt="Sunlight Games" class="img-fluid" style="max-height: 300px; opacity: 0.8;">
    </div>
</div>
@endsection
