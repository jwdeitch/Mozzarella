@extends('app')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Product</th>
            <th>Unit</th>
            <th>Quantity</th>
            <th>Expiration date</th>
            <th>Status</th>
            <th>Submitted</th>

        </tr>
        </thead>
        <tbody>
        <tr>


        @foreach ($props as $prop)

                <td>{{ $prop->id }}</td>
                <td><a href="#">(None)</a></td>
            <td>Unit 87</td>
                <td>{{ $prop->quantity }}</td>
                <td>{{ $prop->exp_date->diffForHumans() }}</td>
                <td id="status">{{ $prop->status }}</td>
                <td>{{  $prop->created_at->diffForHumans() }}</td>
            @endforeach
        </tr>

        </tbody>
    </table>


@stop