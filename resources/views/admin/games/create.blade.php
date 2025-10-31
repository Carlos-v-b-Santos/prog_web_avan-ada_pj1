@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h2>Adicionar Novo Game</h2>

    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <div class="mb-3">
            <label for="nome" class="form-label">Nome do Jogo</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço (Ex: 149.90)</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
        </div>
        
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem do Jogo</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
        </div>

        <button type="submit" class="btn btn-primary">Salvar Produto</button>
        <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection