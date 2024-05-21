
        @extends('layout/principal')

        @section('conteudo')

        <h1>Novo produto</h1>
        
        <form action="/produtos/adiciona" method="post">

            <?php

            $timestamp = new DateTime();
            $timestamp->getTimestamp();

            ?>

            <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
            
            <div class="form-group">
                <label id="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome"/>
            </div>
            
            <div class="form-group">
                <label id="valor">Valor:</label>
                <input class="form-control" type="number" name="valor" id="valor"/>
            </div>
            
            <div class="form-group">
                <label id="descricao">Descrição:</label>
                <input class="form-control" type="text" name="descricao" id="descricao"/>
            </div>

            <div class="form-group">
                <label id="quantidade">Quantidade:</label>
                <input class="form-control" type="number" name="quantidade" id="quantidade"/>
            </div>

            <input type="hidden" value="{{ $timestamp->format('d-m-Y H:i:s') }}" name="created_date" id="created_date"/>

            <input type="hidden" value="{{ Auth::user()->name }}" name="responsavelCadastro" id="responsavelCadastro"/>

            <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
            
        </form>

        @endsection
        