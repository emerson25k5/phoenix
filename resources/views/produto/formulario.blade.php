
        @extends('layout/principal')

        @section('conteudo')

        <h1>Novo produto</h1>
        
        <form action="/produtos/adiciona" method="post">

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
                <input class="form-control" type="" name="descricao" id="descricao"/>
            </div>

            <div class="form-group">
                <label id="quantidade">Quantidade:</label>
                <input class="form-control" type="number" name="quantidade" id="quantidade"/>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
            
        </form>

        @endsection
        