@extends('adminlte::page')

@section('title', 'Cadastrar Nova Categoria')

@section('content_header')
    <h1>
        <a href="{{ route('categories') }}" class="btn btn-success">Voltar</a>
        Cadastrar Nova Categoria
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card card-header">
                    Cadastro de Categoria
                </div>
                <div class="card-body">

                    @include('admin.categories.includes.alerts')

                    <form action="{{ route('categories.store') }}" method="POST" class="form">
                        @include('admin.categories._partials.form')
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
