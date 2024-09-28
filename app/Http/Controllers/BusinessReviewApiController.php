<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SalonReview;
use App\Models\Salon;
use App\Models\User;

class BusinessReviewApiController extends Controller
{
    // GET methods
    public function index($id = null) {
        if(!isset($id)) {
            $results = SalonReview::all();
        }
        else {
            $results = SalonReview::where('id', $id)->first();
        }

        return $results;
    }

    public function byBusiness(Salon $business) {
        return SalonReview::where('business_id', $business->id)->get();
    }

    public function byUser(User $user) {
        return SalonReview::where('by_user_id', $user->id)->get();
    }

    // POST method
    public function store(SalonReview $businessReview) {
        request()->validate([
            'business_id' => 'required',
            'by_user_id' => 'required',
            'appointment_id' => 'required',
            'rating' => 'required'
        ]);

        return SalonReview::create([
            'business_id' => request('business_id'),
            'by_user_id' => request('by_user_id'),
            'appointment_id' => request('appointment_id'),
            'rating' => request('rating'),
            'review' => request('review')
        ]);
    }

    // PUT method
    public function update(SalonReview $businessReview) {
        request()->validate([
            'business_id' => 'required',
            'by_user_id' => 'required',
            'appointment_id' => 'required',
            'rating' => 'required'
        ]);

        $result = $businessReview->update([
            'business_id' => request('business_id'),
            'by_user_id' => request('by_user_id'),
            'appointment_id' => request('appointment_id'),
            'rating' => request('rating'),
            'review' => request('review')
        ]);

        return ["success" => $result];
    }

    // DELETE
    public function delete(SalonReview $businessReview) {
        $result = $businessReview->delete();

        return ["success" => $result];
    }
}
