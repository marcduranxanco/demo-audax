@extends('layouts.app')

@section('content')
<div class="row">

    <table class="table table-bordered">
        <tr>
            <th>Id contract</th>
            <th>Contract type</th>
            <th>Id Customer</th>
            <th>Customer Name</th>
        </tr>
        @foreach ($contracts_user as $contract)
        <tr>
            <td>{{ $contract->id }}</td>
            <td>{{ $contract->type }}</td>
            <td>{{ $contract->customer_id }}</td>
            <td>{{ $contract->first_name }} {{ $contract->last_name }}</td>
        </tr>
        @endforeach
    </table>


</div>
@endsection
