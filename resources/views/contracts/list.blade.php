@extends('layouts.app')

@section('content')
<div class="row">
    <h2>Contracts list</h2>
</div>
<div class="row mt-3">
    <div class="col-sm">
        <select class="form-select" id="customer_id">
        @foreach ($customers as $customer)
            <option value={{ $customer->id }}>{{ $customer->id }} - {{ $customer->first_name }} {{ $customer->last_name }}</option>
        @endforeach
        </select>
    </div>
    <div class="col-sm">
        <button type="button" class="btn btn-info" id="find">Find contracts</button>
        <button type="button" class="btn btn-secondary" id="reset">Show all</button>
    </div>
</div>
<div class="row mt-3" id="contracts_div">

    <table class="table table-bordered" id="contracts_table">
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
