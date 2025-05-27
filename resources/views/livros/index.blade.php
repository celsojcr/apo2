
@extends('layouts.app')

@section('content')
<h1>Lista de Livros</h1>

<a href="{{ route('livros.create') }}" class="btn btn-primary mb-2">Novo Livro</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->autor }}</td>
            <td>{{ $livro->ano_publicacao }}</td>
            <td>
                <a href="{{ route('livros.show', $livro) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('livros.edit', $livro) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirma exclusão?');">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
