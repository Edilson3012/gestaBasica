@extends('adminlte::page')

@section('title', 'Detalhes da Categoria')

@section('content_header')
    <h1>
        <a href="{{ route('categories') }}" class="btn btn-success">Voltar</a>
        Detalhes da Categoria: <b>{{ $category->tx_title }}</b>
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card card-header">
                    Detalhes da Categoria
                </div>
                <div class="card-body">
                    <p><strong>ID: </strong>{{ $category->id_category }}</p>
                    <p><strong>Título: </strong>{{ $category->tx_title }}</p>
                    <p><strong>URL: </strong>{{ $category->tx_url }}</p>
                    <p><strong>Descrição: </strong>{{ $category->tx_description }}</p>
                    <hr>
                    <form action="{{ route('categories.destroy', $category->id_category) }}" method="GET">
                        @csrf
                        {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
