<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    public function checkCustomer(Request $request)
    {
//        $customer = Customer::where('national_id',$request->national_id)->first();

        $customer_id = Redis::get('national_'.$request->national_id);
        info($customer_id);

    if ($customer_id){
        Customer::where('id',$customer_id)->update($request->all());

    }else{

        Customer::create($request->all());
    }






    }
    public function checkCustomerCache(Request $request)
    {
//        $customer = Customer::where('national_id',$request->national_id)->first();

        $customer_id=Cache::get('national_id_'.$request->national_id);

        if ($customer_id){
            Customer::where('id',$customer_id)->update($request->all());

        }else{

            Customer::create($request->all());
        }






    }
}
