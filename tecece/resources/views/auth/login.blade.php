@extends('layouts.app')

@section('content')
    <h2>Login</h2>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Novo campo Select para Aluno ou Professor -->
        <div>
            <label for="type">Tipo de Usuário:</label>
            <select name="type" id="type" required>
                <option value="aluno">Aluno</option>
                <option value="professor">Professor</option>
            </select>
            @error('type')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Entrar</button>
    </form>
@endsection
