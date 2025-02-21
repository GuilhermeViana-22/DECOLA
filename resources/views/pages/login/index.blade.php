@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="login-container p-4 bg-white shadow rounded text-center">
        <img src="{{ asset('arquivos/logos/1.png') }}" width="40%" alt="Logo Decola">
        <h3 class="mt-3">Acesse sua conta</h3>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-danger w-100">Entrar</button>
        </form>

        <div class="mt-3">
            <a href="{{ route('password.request') }}" class="text-muted">Esqueceu sua senha?</a>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .login-container {
        max-width: 400px;
        border-radius: 10px;
    }
</style>
@endpush
