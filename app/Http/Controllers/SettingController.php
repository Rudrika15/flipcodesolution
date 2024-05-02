<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function getSettings()
    {
        try {
            $result = Setting::all();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function saveSettings()
    {
        try {
            request()->validate([
                'key' => 'required',
                'value' => 'required'
            ]);

            Setting::truncate();
            $result = Setting::create([
                'key' => request('key'),
                'value' => request('value')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
}
