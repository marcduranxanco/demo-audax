<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use Illuminate\Support\Facades\DB;

class ContractsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contracts  $contracts
     * @return \Illuminate\Http\Response
     */
    public function show(Contracts $contracts)
    {
        $contracts_user = DB::table('contracts')
        ->join('customers', 'customers.id', '=', 'customer_id')
        ->select('contracts.*', 'customers.first_name', 'customers.last_name')
        ->get();
        $customers = DB::table('customers')->get();

        return view('contracts.list',compact('contracts_user', 'customers'));
    }
}
