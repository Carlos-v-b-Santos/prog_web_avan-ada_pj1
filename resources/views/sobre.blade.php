@extends('layouts.app')

@section('titulo', 'Sobre Nós')

@section('conteudo')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-warning">Quem Somos ☀️</h1>
        <p class="lead">A luz que guia os gamers até seus jogos perfeitos.</p>
    </div>

    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('imagens/paginas/sobre.png') }}" 
                alt="Equipe Sunlight" 
                class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold text-light">Nossa História</h3>
            <p>
                A <strong>Sunlight Games</strong> A Sunlight Games surgiu da vontade de tornar o universo gamer mais simples e direto. Unimos conhecimento técnico e paixão por jogos 
                para criar uma loja que atende às necessidades reais dos jogadores brasileiros.
            </p>

            <h3 class="fw-bold text-light mt-4">Nossa Missão</h3>
            <p>
                Facilitar o acesso a jogos digitais com uma experiência de compra rápida, segura e sem complicações. Cada jogo é uma escolha pessoal — e
                 nosso papel é garantir que essa escolha seja fácil e confiável.
            </p>

            <blockquote class="text-warning mt-4">
                <em>“A luz que guia o jogador até o próximo desafio.”</em>
            </blockquote>
        </div>
    </div>
</div>
@endsection
