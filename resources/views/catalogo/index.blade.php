@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h2>Catálogo de Jogos</h2>
    <p>Aqui estão os jogos disponíveis em nossa loja</p>

    <div class="row">
        @forelse ($games as $game)
            <div class="col-md-4 mb-3">
                <div class="card">
                    
                    @if ($game->imagem)
                        <img src="{{ asset('storage/' . $game->imagem) }}" class="card-img-top" alt="{{ $game->nome }}">
                    @else
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem Padrão">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $game->nome }}</h5>
                        <p class="card-text">{{ $game->descricao }}</p>
                        <h6 class="card-subtitle mb-2 text-muted">R$ {{ number_format($game->preco, 2, ',', '.') }}</h6>
                        
                        </div>
                </div>
            </div>
        @empty
            <div class="col">
                <p>Nenhum game encontrado no catálogo no momento.</p>
            </div>
        @endforelse
    </div> </div>
@endsection