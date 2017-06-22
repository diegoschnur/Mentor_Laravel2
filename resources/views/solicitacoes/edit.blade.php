@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Solicitação</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["solicitacoes.update", $solicitacao->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('projeto_id', 'Projeto:') !!}
            {!! Form::select('projeto_id', \App\Projeto::orderBy('nome')->pluck('nome', 'id')->toArray(),$solicitacao->projeto_id, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $solicitacao->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data Abertura:') !!}
            {!! Form::date('data', $solicitacao->data, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('componentes', 'Componentes:') !!}
            {!! Form::textarea('componentes', $solicitacao->componentes, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('metodologia', 'Metodologia:') !!}
            {!! Form::textarea('metodologia', $solicitacao->metodologia, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observacões:') !!}
            {!! Form::textarea('observacoes', $solicitacao->observacoes, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Solicitação', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection