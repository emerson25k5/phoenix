
            @extends('layout/principal')

            @section('conteudo')
            <h1>Detalhes do produto: {{$p->nome}}</h1>
            <ul>
                <li>
                    <b>Valor: </b>R$ {{$p->valor}}
                </li>
                <li>
                    <b>Descrição: </b>{{$p->descricao}}
                </li>
                <li>
                    <b>Quantidade em estoque: </b>{{$p->quantidade}}
                </li>
                <li>
                    <b>Responsável pelo cadastro: </b>{{$p->responsavelCadastro}}
                </li>

                @if(isset($p->updated_date))
                    <li>
                        <b>Atualizado em: </b>{{$p->updated_date}}
                    </li>
                @else
                    <?= (empty($p->created_date)) ? "" : '<li><b>Criado em: </b>'. $p->created_date;?></li>
                @endif           
            </ul>
            @endsection