
@extends('layouts.app')

@section('content')
<h1>Editar Livro</h1>

<form action="{{ route('livros.update', $livro) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" value="{{ $livro->titulo }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="autor" value="{{ $livro->autor }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" name="ano_publicacao" value="{{ $livro->ano_publicacao }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="editora">Editora</label>
        <input type="text" name="editora" value="{{ $livro->editora }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="genero">Gênero</label>
        <input type="text" name="genero" value="{{ $livro->genero }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="{{ route('livros.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
