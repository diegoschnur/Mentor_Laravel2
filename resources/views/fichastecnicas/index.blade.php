@extends('app')

@section('content')
    <div class="container">

        <a href="{{ route('fichastecnicas.create') }}" class="btn-sm btn-success">Nova Ficha Técnica</a>

        <h1>Fichas Técnicas</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Tempo</th>
                <th>Componentes</th>
                <th>Metodologia</th>
                <th>Descrição</th>
                <th>Acão</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fichastecnicas as $fts)
                <tr>
                    <td>{{ $fts->nome }}</td>
                    <td>{{ $fts->cliente }}</td>
                    <td>{{ $fts->data }}</td>
                    <td>{{ $fts->tempo }}</td>
                    <td>{{ $fts->componentes }}</td>
                    <td>{{ $fts->metodologia }}</td>
                    <td>{{ $fts->descricao }}</td>
                    <td><a href="{{ route('fichastecnicas.edit', ['id'=>$fts->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('fichastecnicas.destroy', ['id'=>$fts->id]) }}"
                           class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
