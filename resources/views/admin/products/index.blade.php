@extends('adminlte::page')

@section('title', 'Listagem de Produtos')

@section('content_header')
    <h1>
        <a href="{{ route('product.create') }}" class="btn btn-success">Add</a>
        Produtos
    </h1>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('categories') }}">Produtos</a></li>
        </ol>
    </nav>

@stop

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header"></div>
                <div class="card-body">
                    {{-- <form action="{{ route('categories.search') }}" class="form form-inline" method="POST">
                        @csrf
                        <input type="text" name="tx_title" placeholder="Título" class="form-control" value="{{ $data['tx_title'] ?? '' }}">
                        <input type="text" name="tx_url" placeholder="URL" class="form-control" value="{{ $data['tx_url'] ?? '' }}" >
                        <input type="text" name="tx_description" placeholder="Descrição" class="form-control" value="{{ $data['tx_description'] ?? '' }}" >
                        <button type="submit" class="btn btn-success">Pesquisar</button>
                    </form>
                    @if (isset($data))
                        <a href="{{route('categories')}}">Limpar filtros</a>
                    @endif --}}
                </div>
            </div>
        </div>

        <div class="col-md-12">
            @include('admin.includes.alerts')
            <div class="card card-primary">
                <div class="card-header">Listagem de Produtos</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">URL</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço</th>
                                <th width="200px" scope="col">Ações</th>
                            </tr>
                        <tbody>
                            @foreach ($produtos as $prod)
                                <tr>
                                    <th scope="row">{{ $prod->id_product }}</th>
                                    <td>{{ $prod->tx_name }}</td>
                                    <td>{{ $prod->tx_url }}</td>
                                    <td>{{ $prod->category->tx_title}}</td>
                                    <td>{{ $prod->vl_price }}</td>
                                    <td>
                                        {{-- <a href="{{ route('categories.edit', $prod->id_product) }}"
                                            class="badge bg-warning">Editar</a>
                                        <a href="{{ route('categories.show', $prod->id_category) }}"
                                            class="badge bg-info">Detalhes</a>
                                        <a href="{{ route('categories.destroy', $prod->id_category) }}"
                                            class="badge bg-danger">Deletar</a> --}}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        </thead>
                    </table>

                    {{-- {!! $produtos->links() !!} --}}

                </div>
            </div>
        </div>
    </div>
@stop
