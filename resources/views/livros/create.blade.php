
@extends('layouts.app')

@section('content')
<h1>Novo Livro</h1>

<form action="{{ route('livros.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="autor" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" name="ano_publicacao" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="editora">Editora</label>
        <input type="text" name="editora" class="form-control">
    </div>
    <div class="form-group">
        <label for="genero">Gênero</label>
        <input type="text" name="genero" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('livros.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
