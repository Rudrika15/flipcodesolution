<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CustomerReview;
use App\Models\Salon;
use App\Models\User;

class CustomerReviewApiController extends Controller
{
    // GET methods
    public function index($id = null) {
        if(!isset($id)) {
            $results = CustomerReview::all();
        }
        else {
            $results = CustomerReview::where('id', $id)->first();
        }

        return $results;
    }

    public function byBusiness(Salon $business) {
        return CustomerReview::where('by_business_id', $business->id)->get();
    }

    public function byUser(User $user) {
        return CustomerReview::where('user_id', $user->id)->get();
    }

    // POST method
    public function store(CustomerReview $customerReview) {
        request()->validate([
            'by_business_id' => 'required',
            'user_id' => 'required',
            'appointment_id' => 'required',
            'rating' => 'required'
        ]);

        return CustomerReview::create([
            'by_business_id' => request('by_business_id'),
            'user_id' => request('user_id'),
            'appointment_id' => request('appointment_id'),
            'rating' => request('rating'),
            'review' => request('review')
        ]);
    }

    // PUT method
    public function update(CustomerReview $customerReview) {
        request()->validate([
            'by_business_id' => 'required',
            'user_id' => 'required',
            'appointment_id' => 'required',
            'rating' => 'required'
        ]);

        $result = $customerReview->update([
            'by_business_id' => request('by_business_id'),
            'user_id' => request('user_id'),
            'appointment_id' => request('appointment_id'),
            'rating' => request('rating'),
            'review' => request('review')
        ]);

        return ["success" => $result];
    }

    // DELETE
    public function delete(CustomerReview $customerReview) {
        $result = $customerReview->delete();

        return ["success" => $result];
    }
}
