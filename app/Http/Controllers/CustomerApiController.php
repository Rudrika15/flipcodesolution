<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerApiController extends Controller
{
    // GET methods
    public function index($id = null) {
        if (!isset($id)) {
            $results = Customer::all();
        }
        else {
            $results = Customer::where('id', $id)->first();
        }

        return $results;
    }

    // POST method
    public function store(Customer $customer) {
        request()->validate([
            'user_id',
            'customer_name',
            'gender'
        ]);

        return Customer::create([
            'user_id' => request('user_id'),
            'customer_name' => request('customer_name'),
            'gender' => request('gender'),
            'referral_code' => request('referral_code'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude')
        ]);
    }

    // PUT method
    public function update(Customer $customer) {
        request()->validate([
            'user_id',
            'customer_name',
            'gender'
        ]);

        $result = $customer->update([
            'user_id' => request('user_id'),
            'customer_name' => request('customer_name'),
            'gender' => request('gender'),
            'referral_code' => request('referral_code'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude')
        ]);

        return ["success" => $result];
    }

    // DELETE
    public function delete(Customer $customer) {
        $result = $customer->delete();

        return ["success" => $result];
    }
}
