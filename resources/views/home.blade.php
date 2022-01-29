@extends('layout.app')


@section('conteudo')
<div class="container">
    <div class="row">
        @foreach($produtos as $produto)

        <div class="col-sm-4 pt-5">
            <div class="card" style="width: 18rem;">
                <img src="https://via.placeholder.com/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$produto->nome}}</h5>
                    <p class="card-text">{{$produto->descricao}}</p>
                    <a href="/produto/{{$produto->id}}" class="btn btn-primary">comprar</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection