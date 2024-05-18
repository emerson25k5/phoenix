@extends('layout/principal')

@section('conteudo')

<form action="/produtos/efetuaAlteracao/{{$p->id}}" method="post">

<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>

<div class="form-group">
    <label id="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" id="nome" value="{{$p->nome}}"/>
</div>

<div class="form-group">
    <label id="valor">Valor:</label>
    <input class="form-control" name="valor" id="valor" value="{{$p->valor}}"/>
</div>

<div class="form-group">
    <label id="descricao">Descrição:</label>
    <input class="form-control" type="text" name="descricao" id="descricao" value="{{$p->descricao}}"/>
</div>

<div class="form-group">
    <label id="quantidade">Quantidade:</label>
    <input class="form-control" type="number" name="quantidade" id="quantidade" value="{{$p->quantidade}}"/>
</div>

<button class="btn btn-primary btn-block" type="submit">Atualizar</button>

</form>

@endsection
