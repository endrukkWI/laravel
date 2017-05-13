<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//add models like this !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
use App\Customer;

class CustomerController extends Controller
{
    //
    protected $table  = 'customer';

    public function customer($id) {
        $customer = Customer::find($id);
        return view('customer',array('customer' => $customer) );
        return view('customer',compact($customer) );
    }
}
