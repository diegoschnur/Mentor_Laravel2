@extends('app')

@section('content')
    <div class="container">

        <a href="{{ route('solicitacoes.create') }}" class="btn-sm btn-success">Nova Solicitação</a>

        <h1>Solicitações</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Componentes</th>
                <th>Metodologia</th>
                <th>Observacoes</th>
                <th>Projeto</th>
                <th>Acão</th>
            </tr>
            </thead>
            <tbody>
            @foreach($solicitacoes as $sol)
                <tr>
                    <td>{{ $sol->nome }}</td>
                    <td>{{ $sol->data }}</td>
                    <td>{{ $sol->componentes }}</td>
                    <td>{{ $sol->metodologia }}</td>
                    <td>{{ $sol->observacoes }}</td>
                    <td>{{ $sol->projeto_id }}</td>
                    <td><a href="{{ route('solicitacoes.edit', ['id'=>$sol->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('solicitacoes.destroy', ['id'=>$sol->id]) }}"
                           class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
