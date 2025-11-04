@extends('layouts.app') 
@section('titulo', 'Visualização de Mensagens')
@section('conteudo')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>🗳️ Mensagens Recebidas</h2>
        <a href="{{ route('mensagens.create') }}" class="btn btn-secondary">Voltar ao Fale Conosco</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($mensagens->isEmpty())
        <div class="alert alert-info">
            Nenhuma mensagem foi recebida ainda.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Mensagem</th>
                        <th>Recebido em</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Loop para exibir as mensagens --}}
                    @foreach($mensagens as $mensagem)
                    <tr>
                        <td>{{ $mensagem->id }}</td>
                        <td>{{ $mensagem->nome }}</td>
                        <td>{{ $mensagem->email }}</td>
                        <td>{{ $mensagem->telefone }}</td>
                        <td style="max-width: 300px; white-space: normal;">{{ $mensagem->mensagem }}</td>
                        <td>{{ $mensagem->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection