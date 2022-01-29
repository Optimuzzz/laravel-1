@extends('layout.app')
@section('conteudo')

<div class="container">
    <div class="h1">{{$produto->nome}}</div>

    <div class="d-flex flex-row justify-content-center mt-5 flex-wrap flex-md-nowrap">

        <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/400" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$produto->nome}}</h5>
                <p class="card-text">{{$produto->descricao}}</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>

    </div>
</div>
@endsection