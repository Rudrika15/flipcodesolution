<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceCategory;

class ServiceCategoryApiController extends Controller
{
    // GET
    public function index($id = null) {
        if (!isset($id)) {
            $results = ServiceCategory::all();
        }
        else {
            $results = ServiceCategory::where('id', $id)->first();
        }

        return $results;
    }

    // POST
    public function store(ServiceCategory $serviceCategory) {
        request()->validate([
            'service_category' => 'required',
            'icon_url' => 'required'
        ]);

        return  ServiceCategory::create([
            'service_category' => request('service_category'),
            'icon_url' => request('icon_url')
        ]);
    }

    // PUT method
    public function update(ServiceCategory $serviceCategory) {
        request()->validate([
            'service_category' => 'required',
            'icon_url' => 'required'
        ]);

        $result = $serviceCategory->update([
            'service_category' => request('service_category'),
            'icon_url' => request('icon_url')
        ]);

        return ["success" => $result];
    }

    // DELETE method
    public function delete(ServiceCategory $serviceCategory) {
        $result = $serviceCategory->delete();

        return ["success" => $result];
    }
}
