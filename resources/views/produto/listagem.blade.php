@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado</div>

    @else
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-borderead table-hover">
        @foreach ($produtos as $p)
            <tr class="{{ $p->quantidade <= 1 ? 'alert alert-danger' : ''}}">
                <td>
                    {{ $p->nome }}
                </td>
                <td>
                    {{ $p->valor }}
                </td>
                <td>
                    {{ $p->descricao }}
                </td>
                <td>
                    {{ $p->quantidade }}
                </td>
                <td>
                <a href="/produtos/mostra/{{ $p->id }}">Visualizar
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </a>
                </td>
            </tr>
        @endforeach
    </table>

    @endif

    <h4>
        <span class="alert alert-danger pull-right">
            Um ou menos itens no estoque
        </span>
    </h4>
@stop