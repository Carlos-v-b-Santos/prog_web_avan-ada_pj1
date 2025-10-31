@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h2>Editar Jogo: {{ $game->nome }}</h2>

    <form action="{{ route('games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Jogo</label>
            <input type="text" class="form-control" id="nome" name="nome" 
                   value="{{ old('nome', $game->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ old('descricao', $game->descricao) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço (Ex: 149.90)</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco" 
                   value="{{ old('preco', $game->preco) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem do Jogo</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
            @if ($game->imagem)
                <small class="d-block mt-2">Imagem Atual:</small>
                <img src="{{ asset('storage/' . $game->imagem) }}" width="150" alt="{{ $game->nome }}">
                <small class="d-block mt-1">Deixe em branco para não alterar.</small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection