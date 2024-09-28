<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use Illuminate\Http\Request;

use App\Models\Amenity;
use App\Models\Salon;
use App\Models\SalonAmenity;
use App\Models\SalonServiceCategory;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AmenityApiController extends Controller
{
    // GET method
    public function index($id = null)
    {

        try {
            if (!isset($id)) {
                $results = Amenity::all();
            } else {
                $results = Amenity::where('id', $id)->first();
            }
            return response()->json([
                'status' => true,
                'data' => $results,
                'message' => 'Amenities successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    // POST method
    public function store(Amenity $amenity)
    {
        request()->validate([
            'amenity_name' => 'required',
            'icon_url' => 'required',
        ]);

        return Amenity::create([
            'amenity_name' => request('amenity_name'),
            'icon_url' => request('icon_url')
        ]);
    }

    // PUT method
    public function update(Amenity $amenity)
    {
        request()->validate([
            'amenity_name' => 'required',
            'icon_url' => 'required'
        ]);

        $result = $amenity->update([
            'amenity_name' => request('amenity_name'),
            'icon_url' => request('icon_url')
        ]);
        return ["success" => $result];
    }

    //DELETE method
    public function delete(Amenity $amenity)
    {
        $result = $amenity->delete();

        return ["success" => $result];
    }

    // Amenity
    // public function byAmenity(SalonAmenity $SalonAmenity)
    // {
    //     // return $SalonAmenity;
    //     try {
    //         $result = SalonAmenity::where('salon_id', $SalonAmenity->id)->get();
    //         return Utils::successResponse($result);
    //     } catch (ModelNotFoundException) {
    //         return Utils::notFoundResponse();
    //     } catch (Exception $ex) {
    //         return Utils::generalErrorResponse($ex);
    //     }
    // }

    public function byAmenity(Salon $salon)
    {
        try {
            // $result = SalonAmenity::where('salon_id', $salon->id)->get();
            $result = SalonAmenity::join('amenities', 'amenities.id', '=', 'salon_amenities.amenity_id')
                ->where('salon_id', $salon->id)
                ->get(['salon_amenities.*', 'amenities.amenity_name', 'amenities.icon_url']);

            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
}
