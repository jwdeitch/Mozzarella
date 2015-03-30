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
            <td>1</td>
            <td><a href="#">Mozzarrella</a></td>
            <td>Unit 87</td>
            <td>10</td>
            <td>04/05/15 (6 days from now)</td>
            <td id="status">Open</td>
            <td>9 hours ago</td>

        </tr>

        </tbody>
    </table>


@stop