@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h2>Gerenciamento de Produtos</h2>
    <p>Esta é a página de Cadastro de Produtos/Serviços.</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('games.create') }}" class="btn btn-primary mb-3">
        Adicionar Novo Jogo
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>
                        <img src="{{ asset('storage/'. $game->imagem) }}" alt="{{ $game->nome }}" width="100">
                    </td>
                    <td>{{ $game->nome }}</td>
                    <td>R$ {{ number_format($game->preco, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('games.edit', $game->id) }}" class="btn btn-sm btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum game cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection