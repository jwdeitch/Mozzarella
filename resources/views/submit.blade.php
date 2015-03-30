@extends('app')


@section('content')

    {!! Form::open() !!}
    {!! Form::label('Product:'); !!}
    {!! Form::text('Product',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::label('Quantity:'); !!}
    {!! Form::text('qnt',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::label('Expiration Date:'); !!}
    {!! Form::date('qnt',['class'=>'form-control']); !!}
    <br/> <br/>
    {!! Form::label('notes:'); !!}
    <br/>
    {!! Form::textarea('usr_notes',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::close() !!}

@stop