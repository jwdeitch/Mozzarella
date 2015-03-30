@extends('app')


@section('content')

    {!! Form::open() !!}
    {!! Form::label('Product:'); !!}
    {!! Form::text('Product'); !!}
    <br/>
    {!! Form::label('Quantity:'); !!}
    {!! Form::text('qnt'); !!}
    <br/> <br/>
    {!! Form::label('notes:'); !!}
    <br/>
    {!! Form::textarea('usr_notes'); !!}
    <br/>
    {!! Form::close() !!}

@stop