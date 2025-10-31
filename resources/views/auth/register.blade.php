@extends('layouts.app')

@section('titulo', 'Cadastrar')

@section('conteudo')
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center text-warning mb-4">Crie sua conta ☀️</h2>

    <form method="POST" action="{{ route('register') }}" class="bg-dark p-4 rounded shadow">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label text-light">Nome</label>
            <input type="text" name="name" id="name" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label text-light">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label text-light">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label text-light">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-sol w-100">Cadastrar</button>

        <p class="text-center text-secondary mt-3">
            Já tem uma conta?
            <a href="{{ route('login') }}" class="text-warning">Entrar</a>
        </p>
    </form>
</div>
@endsection