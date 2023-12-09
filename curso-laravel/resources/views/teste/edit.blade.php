@extends('layouts.app')

@section('title','Edição')
@section('content')
<!-- TUDO QUE FOR DIGITADO AQUI VAI SER RENDERIZADO DENTRO DO TEMPLATE-->
<div class="container mt-5">
       <h1>Edite um Jogo</h1>
       <hr>
       <form action="{{ route('teste-update',['id'=>$teste->id])}}" method="post">
              @csrf
              @method('PUT')
              <?php

              ?>
              <div class="form-group">
                     <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite um Nome" value="{{$teste -> nome}}">
                     </div>
                     <br>
                     <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria" value="{{$teste -> categoria}}">
                     </div>
                     <br>
                     <div class="form-group">
                            <label for="ano_criacao">Ano de Criação:</label>
                            <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o Ano De Criação" value="{{$teste -> ano_criacao}}">
                     </div>
                     <br>
                     <div class="form-group">
                            <label for="valor">Valor:</label>
                            <input type="number" class="form-control" name="valor" placeholder="Digite um valor" value="{{$teste -> valor}}">
                     </div>
                     <br>
                     <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                     </div>
              </div>
       </form>
</div>


@endsection
