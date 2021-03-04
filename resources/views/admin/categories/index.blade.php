@extends('adminlte::page')

@section('title', 'Listagem de Categorias')

@section('content_header')
    <h1>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Add</a>
        Categorias
    </h1>

@stop

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="{{ route('categories.search') }}" class="form form-inline" method="POST">
                        @csrf
                        <input type="text" name="tx_title" placeholder="Título" class="form-control">
                        <input type="text" name="tx_url" placeholder="URL" class="form-control">
                        <input type="text" name="tx_description" placeholder="Descrição" class="form-control" >
                        <button type="submit" class="btn btn-success">Pesquisar</button>
                    </form>

                    @if (isset($data))
                        <p><strong>Resultados para: </strong> {{ $data }}</p>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">Listagem de Categorias</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">URL</th>
                                <th width="200px" scope="col">Ações</th>
                            </tr>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id_category }}</th>
                                    <td>{{ $category->tx_title }}</td>
                                    <td>{{ $category->tx_url }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id_category) }}"
                                            class="badge bg-warning">Editar</a>
                                        <a href="{{ route('categories.show', $category->id_category) }}"
                                            class="badge bg-info">Detalhes</a>
                                        <a href="{{ route('categories.destroy', $category->id_category) }}"
                                            class="badge bg-danger">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
