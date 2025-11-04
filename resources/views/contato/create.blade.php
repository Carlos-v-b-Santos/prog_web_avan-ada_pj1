@extends('layouts.app') 
@section('titulo', 'Fale Conosco')
@section('conteudo')
<div class="container mt-5">
    <h1>Fale Conosco</h1>
    <p>Preencha o formulário abaixo para entrar em contato com nossa equipe.</p>

    {{-- Exibe a mensagem de sucesso se houver --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('mensagens.store') }}" method="POST">
        @csrf {{-- Proteção CSRF obrigatória no Laravel --}}

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}" required>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail de Contato</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone de Contato (Opcional)</label>
            <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value="{{ old('telefone') }}">
            @error('telefone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control @error('mensagem') is-invalid @enderror" id="mensagem" name="mensagem" rows="5" required>{{ old('mensagem') }}</textarea>
            @error('mensagem')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>
</div>
@endsection