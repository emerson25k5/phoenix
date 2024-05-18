            @extends('layout/principal')

            @section('conteudo')
            
            <h1>Listagem de produtos</h1>

            <table class="table table-hover table-striped table-bordered">

                @if(empty($produtos))
                    <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
                @else
                @php
                $quantidadeProdutosBaixos = 0;
                @endphp
                <th>Nome</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Qtd</th>
                    @foreach ($produtos as $p)
                        <tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
                            <td>{{$p->nome}}</td>
                            <td>{{$p->valor}}</td>
                            <td>{{$p->descricao}}</td>
                            <td>{{$p->quantidade}}</td>
                            <td>
                                <a href="{{route('mostra', [$p->id])}}">
                                    <span class="fas fa-search"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('remove', [$p->id])}}">
                                    <span class="fas fa-trash"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('altera', [$p->id])}}">
                                    <span class="fas fa-pencil"></span>
                                </a>
                            </td>
                           
                        </tr>
                        @if ($p->quantidade <= 1)
                            @php
                                $quantidadeProdutosBaixos++;
                            @endphp
                        @endif
                        
                    @endforeach
                    
                @endif
                </table>
                @if ($quantidadeProdutosBaixos > 0)
                    <div>
                    <h4>
                        <span class="label label-danger pull-right">
                            Um ou menos itens no estoque
                        </span>                        
                    </h4>
                    </div>
                @endif
             
            
                    @if(old('nome'))
                        <div class="alert alert-success">
                            <strong>Sucesso!</strong> 
                            O produto {{ old('nome') }} foi adicionado/atualizado.
                        </div>
                    @endif

            

            @endsection