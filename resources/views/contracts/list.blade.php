@extends('layouts.app')

@section('content')
<div class="row">
    <h2>Contracts list</h2>
    <p>Find by client id</p>
</div>
<div class="row">
    <div class="col-sm">
        <select class="form-select" aria-label="Default select example">
        @foreach ($customers as $customer)
            <option value={{ $customer->id }}>{{ $customer->id }} - {{ $customer->first_name }} {{ $customer->last_name }}</option>
        @endforeach
        </select>
    </div>
    <div class="col-sm">
        <button type="button" class="btn btn-info" id="find">Find contracts</button>
        <button type="button" class="btn btn-secondary" id="reset">Reset list</button>
    </div>
</div>
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
