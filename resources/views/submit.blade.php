@extends('app')


@section('content')

    {!! Form::open(['action'=>'Proposal_submissions@newproppost','method'=>'post']) !!}
    {!! Form::label('Product:'); !!}
    {!! Form::text('Product',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::label('Quantity:'); !!}
    {!! Form::text('qnt',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::label('Expiration Date:'); !!}
    {!! Form::input('date', 'date',null, ['class' => 'form-control']) !!}

    <br/> <br/>
    {!! Form::label('notes:'); !!}
    <br/>
    {!! Form::textarea('usr_notes',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::submit('Submit',['class'=>'form-control']); !!}

    {!! Form::close() !!}

@stop