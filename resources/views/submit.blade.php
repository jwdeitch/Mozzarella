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
    {!! Form::text('date', 'date', ['class' => 'form-control','id'=>'datetimepicker4']) !!}
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker4').datetimepicker();
        });
    </script>
    <br/> <br/>
    {!! Form::label('notes:'); !!}
    <br/>
    {!! Form::textarea('usr_notes',null,['class'=>'form-control']); !!}
    <br/>
    {!! Form::submit('Submit',['class'=>'form-control']); !!}

    {!! Form::close() !!}

@stop