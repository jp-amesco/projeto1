@extends('layout.app')
@section('title', 'Editar um Produto - '. $produto->titulo)
@section('content')
    <h1>Edit um Produto - {{$produto->titulo}}</h1>
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        {{$message}}
    </div>
    @endif
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!! enctype serve para enviar imagens !!>
    <form method="POST" enctype="multipart/form-data" action="{{action('ProdutosController@update',$id)}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mb-3">
            <label for="sku">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" value="{{$produto->sku}}" placeholder="Digite o Codigo do Produto..." required>
        </div>

        <div class="form-group mb-3">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$produto->titulo}}" placeholder="Digite o Nome do Produto..." required>
        </div>

        <div class="form-group mb-3">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite uma breve descrição do Produto..." required>{{$produto->descricao}}</textarea>
        </div>

        <label for="preco">Preço</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">R$</span>
            </div>

            <input type="number" step=".01" class="form-control" id="preco" name="preco" value="{{$produto->preco}}" placeholder="0,00" required>
        </div>

        <div class="input-group mb-3">
            <label for="imgproduto">Imagem</label>
            <input type="file" class="class-control-file" id="imgproduto" name="imgproduto">
        </div>
        <button type="submit" class="btn btn-primary"> Atuallizar Produto</button>
    </form>
@endsection