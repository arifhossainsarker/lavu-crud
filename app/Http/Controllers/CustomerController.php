<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function all_customer(){
        $customers = Customer::latest()->get();

        return response()->json([
            'customers' => $customers
        ], 200);
    }
}
