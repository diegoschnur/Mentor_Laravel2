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
            {!! Form::select('solicitacao_id', \App\Solicitacao::orderBy('nome')->pluck('nome', 'id')->toArray(),null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::text('cliente', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data Abertura:') !!}
            {!! Form::date('data', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tempo', 'Tempo do Teste:') !!}
            {!! Form::number('tempo', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('componentes', 'Componentes:') !!}
            {!! Form::textarea('componentes', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('metodologia', 'Metodologia:') !!}
            {!! Form::textarea('metodologia', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Ficha Técnica', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection