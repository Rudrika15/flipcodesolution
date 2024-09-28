<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\SalonBusinessHours;
use App\Models\Salon;


class BusinessHoursApiController extends Controller
{
    // GET methods
    public function index($id = null) {
        if(!isset($id)) {
            $results = SalonBusinessHours::all();
        }
        else {
            $results = SalonBusinessHours::where('id', $id)->first();
        }

        return $results;
    }

    public function byBusiness(Salon $business) {
        $result = SalonBusinessHours::where('business_id', $business->id)->first();
        return $result;
    }

    // POST method

    public function store(SalonBusinessHours $businessHours) {
        request()->validate([
            'business_id' => 'required'
        ]);

        $result = SalonBusinessHours::create([
            'business_id'       => request('business_id'),
            'sunday_from'       => Utils::getTimeOrNull(request('sunday_from')),
            'sunday_to'         => Utils::getTimeOrNull(request('sunday_to')),
            'monday_from'       => Utils::getTimeOrNull(request('monday_from')),
            'monday_to'         => Utils::getTimeOrNull(request('monday_to')),
            'tuesday_from'      => Utils::getTimeOrNull(request('tuesday_from')),
            'tuesday_to'        => Utils::getTimeOrNull(request('tuesday_to')),
            'wednesday_from'    => Utils::getTimeOrNull(request('wednesday_from')),
            'wednesday_to'      => Utils::getTimeOrNull(request('wednesday_to')),
            'thursday_from'     => Utils::getTimeOrNull(request('thursday_from')),
            'thursday_to'       => Utils::getTimeOrNull(request('thursday_to')),
            'friday_from'       => Utils::getTimeOrNull(request('friday_from')),
            'friday_to'         => Utils::getTimeOrNull(request('friday_to')),
            'saturday_from'     => Utils::getTimeOrNull(request('saturday_from')),
            'saturday_to'       => Utils::getTimeOrNull(request('saturday_to'))
        ]);

        return $result;
    }

    // PUT method
    public function update(SalonBusinessHours $businessHours) {
        request()->validate([
            'business_id' => 'required'
        ]);

        $result = $businessHours->update([
            'sunday_from'       => Utils::getTimeOrNull(request('sunday_from')),
            'sunday_to'         => Utils::getTimeOrNull(request('sunday_to')),
            'monday_from'       => Utils::getTimeOrNull(request('monday_from')),
            'monday_to'         => Utils::getTimeOrNull(request('monday_to')),
            'tuesday_from'      => Utils::getTimeOrNull(request('tuesday_from')),
            'tuesday_to'        => Utils::getTimeOrNull(request('tuesday_to')),
            'wednesday_from'    => Utils::getTimeOrNull(request('wednesday_from')),
            'wednesday_to'      => Utils::getTimeOrNull(request('wednesday_to')),
            'thursday_from'     => Utils::getTimeOrNull(request('thursday_from')),
            'thursday_to'       => Utils::getTimeOrNull(request('thursday_to')),
            'friday_from'       => Utils::getTimeOrNull(request('friday_from')),
            'friday_to'         => Utils::getTimeOrNull(request('friday_to')),
            'saturday_from'     => Utils::getTimeOrNull(request('saturday_from')),
            'saturday_to'       => Utils::getTimeOrNull(request('saturday_to'))
        ]);

        return ["success" => $result];
    }

    // DELETE method
    public function delete(SalonBusinessHours $businessHours) {
        $result = $businessHours->delete();

        return ["success" => $result];
    }
}
