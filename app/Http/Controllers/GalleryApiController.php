<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use Illuminate\Http\Request;

use App\Models\Gallery;
use App\Models\Salon;
use Exception;

class GalleryApiController extends Controller
{
    // GET methods
    public function index($id = null)
    {
        try {
            if ($id == null) {
                $results = Gallery::all();
            } else {
                $results = Gallery::where('id', $id)->first();
            }

            // if (!isset($id)) {
            //     $results = Gallery::all();
            // } else {
            //     $results = Gallery::where('id', '=', $id)->first();
            // }
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
        // return $results;
    }

    public function byBusiness(Salon $business)
    {
        try {
            $results = Gallery::where('salon_id', $business->id)->get();
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // POST method
    public function store(Gallery $gallery , Request $request)
    {
        request()->validate([
            'salon_id' => 'required',
            'url' => 'required',
            'media_type' => 'required'
        ]);

     

        try {
            $results = Gallery::create([
                'salon_id' => request('salon_id'),
                'url' => request('url'),
                'media_type' => request('media_type')
            ]);
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // PUT method
    public function update(Gallery $gallery)
    {
        request()->validate([
            'business_id' => 'required',
            'url' => 'required',
            'media_type' => 'required'
        ]);

        try {
            $results = $gallery->update([
                'business_id' => request('business_id'),
                'url' => request('url'),
                'media_type' => request('media_type')
            ]);

            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // DELETE method
    public function delete(Gallery $gallery)
    {

        try {
            $result = $gallery->delete();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }

        // return ["success" => $result];
    }
}
