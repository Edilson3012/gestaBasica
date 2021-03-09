@extends('adminlte::page')

@section('title', 'Cadastrar Novo Produto')

@section('content_header')
    <h1>
        <a href="{{ route('categories') }}" class="btn btn-success">Voltar</a>
        Cadastrar Novo Produto
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('categories.create') }}">Cadastrar</a></li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card card-header">
                    Cadastro de Produto
                </div>
                <div class="card-body">

                    @include('admin.includes.alerts')

                    <form action="{{ route('categories.store') }}" method="POST" class="form">
                        @include('admin._partials.form')
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
