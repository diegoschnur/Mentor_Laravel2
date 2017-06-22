@extends('app')

@section('content')
    <div class="container">
        <h1>Nova Solicitação</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'solicitacoes.store']) !!}

        <div class="form-group">
            {!! Form::label('projeto_id', 'Projeto:') !!}
            {!! Form::select('projeto_id', \App\Projeto::orderBy('nome')->pluck('nome', 'id')->toArray(),null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data Abertura:') !!}
            {!! Form::date('data', null, ['class'=>'form-control']) !!}
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
            {!! Form::label('observacoes', 'Observacões:') !!}
            {!! Form::textarea('observacoes', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Solicitação', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection