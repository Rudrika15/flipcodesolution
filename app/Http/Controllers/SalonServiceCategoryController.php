<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\SalonServiceCategory;
use App\Models\Salon;
use App\Models\ServiceCategory;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;


class SalonServiceCategoryController extends Controller
{
    public function index($id = null)
    {
        try {
            if ($id == null) {
                $result = SalonServiceCategory::join('service_categories', 'service_categories.id', '=', 'salon_service_categories.service_category_id')->get(['salon_service_categories.*', 'service_categories.icon_url', 'service_categories.service_category']);
            } else {
                $result = SalonServiceCategory::where('id', $id)->first();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function bySalon(Salon $salon)
    {
        try {
            $result = SalonServiceCategory::join('service_categories', 'service_categories.id', '=', 'salon_service_categories.service_category_id')
                ->where('salon_id', $salon->id)
                ->get(['salon_service_categories.*', 'service_categories.icon_url', 'service_categories.service_category']);

            // $result = SalonServiceCategory::where('salon_id', $salon->id)->get();
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // public function store(SalonServiceCategory $salonServiceCategory)
    // {
    //     request()->validate([
    //         'salon_id' => 'required',
    //         'service_category_id' => 'required|array'
    //     ]);
    //     $salonId = request('salon_id');
    //     $servicecategoryIds = request('service_category_id');

    //     foreach ($servicecategoryIds as $service_category_id) {
    //         $salonAmenities[] = [
    //             'salon_id' => $salonId,
    //             'service_category_id' => $service_category_id
    //         ];
    //     }
    //     foreach ($salonAmenities as $data) {
    //         $salonServiceCategory->create($data);
    //     }

    //     // foreach ($salonAmenities as $data) {
    //     //     $updatedData = $salonServiceCategory->find($data);
    //     //     if ($updatedData == null) {
    //     //         $salonServiceCategory->create($data);
    //     //     }
    //     // }

    //     return ["success" => "Salon service category created successfully"];

    // }

    // public function store(SalonServiceCategory $salonServiceCategory)
    // {
    //     request()->validate([
    //         'salon_id' => 'required',
    //         'service_category_id' => 'required|array'
    //     ]);

    //     $salonId = request('salon_id');
    //     $servicecategoryIds = request('service_category_id');

    //     // Check if salon_id is null
    //     if ($salonId === null) {
    //         return ["error" => "Salon ID is required"];
    //     }

    //     $salon = SalonServiceCategory::where('salon_id', $salonId)->get();

    //     // return $salon->count();
    //     // If salon_id is not null, proceed to create or update data
    //     $salonAmenities = [];
    //     foreach ($servicecategoryIds as $service_category_id) {
    //         $salonAmenities[] = [
    //             'salon_id' => $salonId,
    //             'service_category_id' => $service_category_id
    //         ];

    //         foreach ($servicecategoryIds as $service_category_id) {
    //             $salonAmenities[] = [
    //                 'salon_id' => $salonId,
    //                 'service_category_id' => $service_category_id
    //             ];
    //         }
    //         foreach ($salonAmenities as $data) {
    //             $salonServiceCategory->create($data);
    //         }


    //         // if (count($salon) > 0) {
    //         //     foreach ($salon as $salons) {
    //         //         if ($salons->service_category_id == $service_category_id) {
    //         //             return 'hi';
    //         //             // $salonAmenities[] = [
    //         //             //     'salon_id' => $salonId,
    //         //             //     'service_category_id' => $service_category_id
    //         //             // ];
    //         //         } else {
    //         //             SalonServiceCategory::where('salon_id', $salons->salon_id)->delete();
    //         //         }
    //         //     }
    //         // } else {
    //         //     // Insert the new data
    //         //     // foreach ($salonAmenities as $data) {
    //         //         // $salonServiceCategory->create($salonAmenities);
    //         //     // }

    //         // }
    //     }

    //     return ["success" => "Salon service category created/updated successfully"];
    // }

    public function store(SalonServiceCategory $salonServiceCategory)
    {
        request()->validate([
            'salon_id' => 'required',
            'service_category_id' => 'required|array'
        ]);

        $salonId = request('salon_id');
        $servicecategoryIds = request('service_category_id');

        // Get existing records from the database
        $existingSalonCategories = SalonServiceCategory::where('salon_id', $salonId)->get();

        foreach ($servicecategoryIds as $service_category_id) {
            $existingRecord = $existingSalonCategories->where('service_category_id', $service_category_id)->first();

            if ($existingRecord) {
                // Update the existing record
                $existingRecord->update([
                    'salon_id' => $salonId,
                    'service_category_id' => $service_category_id
                ]);
            } else {
                // Create a new record
                SalonServiceCategory::create([
                    'salon_id' => $salonId,
                    'service_category_id' => $service_category_id
                ]);
            }
        }

        // Delete records that are not in the incoming data
        $existingSalonCategories->whereNotIn('service_category_id', $servicecategoryIds)->each(function ($record) {
            $record->delete();
        });

        return ["success" => "Salon service category created or updated successfully"];
    }




    public function delete(SalonServiceCategory $salonServiceCategory)
    {
        $result = $salonServiceCategory->delete();
        return ["success" => $result];
    }
}
