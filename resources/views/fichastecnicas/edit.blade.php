@extends('app')

@section('content')
    <div class="container">
        <h1>Nova Ficha Técnica</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'fichastecnicas.store']) !!}

        <div class="form-group">
            {!! Form::label('solicitacao_id', 'Solicitação:') !!}
            {!! Form::select('solicitacao_id', \App\Solicitacao::orderBy('nome')->pluck('nome', 'id')->toArray(),$fichatecnica->solicitacao_id, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $fichatecnica->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::text('cliente', $fichatecnica->cliente, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data Abertura:') !!}
            {!! Form::date('data', $fichatecnica->data, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tempo', 'Tempo do Teste:') !!}
            {!! Form::number('tempo', $fichatecnica->tempo, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('componentes', 'Componentes:') !!}
            {!! Form::textarea('componentes', $fichatecnica->componentes, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('metodologia', 'Metodologia:') !!}
            {!! Form::textarea('metodologia', $fichatecnica->metodologia, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::textarea('descricao', $fichatecnica->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Ficha Técnica', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection