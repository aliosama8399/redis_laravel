<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    public function checkCustomer(Request $request)
    {
        $customer = Customer::where('national_id',$request->national_id)->first();

        $national_id = Redis::get('national_'.$request->national_id);
        info($national_id);
//
//    if ($customer){
//        info('update');
//        $customer->update($request->all());
//
//    }else{
//        info('update');
//
//        Customer::create($request->all());
//    }






    }
}
