@extends('adminlte::page')

@section('title', 'Cadastrar Novo Produto')

@section('content_header')
    <h1>
        <a href="{{ route('product.index') }}" class="btn btn-success">Voltar</a>
        Cadastrar Novo Produto
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('product.create') }}">Cadastrar</a></li>
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

                    <form action="{{ route('product.store') }}" method="POST" class="form">
                        @csrf
                        {{-- @include('admin._partials.form') --}}

                        <div class="form-group">
                            <input type="text" class="form-control" name="tx_name" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="tx_url" placeholder="URL">
                        </div>
                        
                        <div class="form-group">
                            <select name="id_category" class="form-control" >
                                <option value="">Escolha</option>
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id_category}}">{{$cat->tx_title}}</option>                                
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="vl_price" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control" name="tx_description" placeholder="Descrição"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
