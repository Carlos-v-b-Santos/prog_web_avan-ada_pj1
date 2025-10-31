@extends('layouts.app')

@section('titulo', 'Entrar')

@section('conteudo')
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center text-warning mb-4">Entrar na Sunlight ☀️</h2>

    <form method="POST" action="{{ route('login') }}" class="bg-dark p-4 rounded shadow">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label text-light">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label text-light">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-sol w-100">Entrar</button>

        <p class="text-center text-secondary mt-3">
            Não tem uma conta?
            <a href="{{ route('register') }}" class="text-warning">Cadastre-se</a>
        </p>
    </form>
</div>
@endsection