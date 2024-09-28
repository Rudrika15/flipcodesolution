<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use Exception;
use Illuminate\Http\Request;
use App\Models\FirebaseDevice;
use App\Models\Setting;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use function PHPUnit\Framework\throwException;

class FirebaseDeviceController extends Controller
{
    public function logClient()
    {
        try {
            request()->validate([
                'platform' => 'required',
                'deviceToken' => 'required',
                'deviceId' => 'required',
                'deviceInfo' => 'required',
                'token' => 'required'
            ]);

            $setting = Setting::where('key', 'firebase_log_token')->firstOrFail();

            if ($setting->value == request('token')) {

                $result = FirebaseDevice::create([
                    'platform' => request('platform'),
                    'deviceToken' => request('deviceToken'),
                    'deviceId' => request('deviceId'),
                    'deviceInfo' => request('deviceInfo')
                ]);
            } else {
                throw new Exception("Invalid token or token not found.");
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
}
