@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h1>
        <a href="{{ route('categories') }}" class="btn btn-success">Voltar</a>
        Editar Categoria: <b>{{ $category->tx_title }}</b>
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="{{ route('categories') }}">Categorias</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('categories.edit', $category->id_category) }}">Editar</a></li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card card-header">
                    Editar Categoria
                </div>
                <div class="card-body">

                    @include('admin.includes.alerts')

                    <form action="{{ route('categories.update', $category->id_category) }}" method="POST" class="form">
                        <input type="hidden" name="_method" value="PUT">
                        @include('admin.categories._partials.form')
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
