@extends('app')

@section('content')
    <div class="container">

        <a href="{{ route('projetos.create') }}" class="btn-sm btn-success">Novo Projeto</a>

        <h1>Projetos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Acão</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projetos as $prj)
                <tr>
                    <td>{{ $prj->nome }}</td>
                    <td>{{ $prj->descricao }}</td>
                    <td><a href="{{ route('projetos.edit', ['id'=>$prj->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('projetos.destroy', ['id'=>$prj->id]) }}"
                           class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection