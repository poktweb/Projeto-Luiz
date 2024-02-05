@extends('layouts.main') {{-- Chama o Layout criado no caso o main --}}
@section('title', 'Etiqueta Livre') {{-- Define o Titulo da Pagina --}}
@section('content') {{-- Define o conteudo da pagina --}}

    <form action="/cadastrar-ebooks" method="post" enctype="multipart/form-data">
        @csrf {{-- Sempre colocar em formularios --}}

        <div class="mb-3">
            <label for="image">Capa do Livro:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>

        <div class="mb-3">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Coloque o titulo">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Exem: Receitas etc">
        </div>

        <div class="form-outline">
            <label class="form-label">Descrição</label><br>
            <textarea class="textarea" name="descricao" id="descricao"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection {{-- Determina o fim da Section de Conteudo da Pagina --}}
