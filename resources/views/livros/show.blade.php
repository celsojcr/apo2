
@extends('layouts.app')

@section('content')
<h1>Detalhes do Livro</h1>

<table class="table table-bordered">
    <tr><th>ID</th><td>{{ $livro->id }}</td></tr>
    <tr><th>Título</th><td>{{ $livro->titulo }}</td></tr>
    <tr><th>Autor</th><td>{{ $livro->autor }}</td></tr>
    <tr><th>Ano de Publicação</th><td>{{ $livro->ano_publicacao }}</td></tr>
    <tr><th>Editora</th><td>{{ $livro->editora }}</td></tr>
    <tr><th>Gênero</th><td>{{ $livro->genero }}</td></tr>
</table>

<a href="{{ route('livros.index') }}" class="btn btn-secondary">Voltar</a>
<a href="{{ route('livros.edit', $livro) }}" class="btn btn-warning">Editar</a>

<form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Confirma exclusão?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Excluir</button>
</form>
@endsection
