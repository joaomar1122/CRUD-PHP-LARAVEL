@extends('layouts.app')

@section('title','Criação de Dados')
@section('content')
<!-- TUDO QUE FOR DIGITADO AQUI VAI SER RENDERIZADO DENTRO DO TEMPLATE-->
<div class="container mt-5">
       <h1>Crie um Jogo</h1>
       <hr>
       <form action="{{ route('teste-store')}}" method="post">
              @csrf
              <div class="form-group">
                     <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite um Nome">
                     </div>
                     <br>
                     <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria">
                     </div>
                     <br>
                     <div class="form-group">
                            <label for="ano_criacao">Ano de Criação:</label>
                            <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o Ano De Criação">
                     </div>
                     <br>
                     <div class="form-group">
                            <label for="valor">Valor:</label>
                            <input type="number" class="form-control" name="valor" placeholder="Digite um valor">
                     </div>
                     <br>
                     <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                     </div>
              </div>
       </form>
</div>


@endsection
