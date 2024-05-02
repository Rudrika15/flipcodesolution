<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use Exception;
use App\Models\Platform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Crypt;

class PlatformController extends Controller
{
    //
    public function getPlatforms($platform = null)
    {
        try {
            return Utils::successResponse(match ($platform) {
                null => Platform::all()->values(),
                'all' => Platform::withTrashed()->get(),
                    //'sortBy' => $this->getPlatformsSorted(),
                default => Platform::where('id', $platform)->firstOrFail()
            });
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getPlatformsSorted(string $field = 'id', int $sortOrder = 1, bool $deleted = false)
    {
        try {
            if ($deleted) {
                $results = Platform::withTrashed()->get();
            } else {
                $results = Platform::all();
            }

            $results = $results->sortBy($field, $sortOrder);
            return $results;
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function registerPlatform()
    {
        try {
            request()->validate([
                'name' => 'required',
            ]);
            $name = request('name');
            $result = Platform::create([
                'name' => $name,
                'token' => Crypt::encrypt($name)
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deletePlatform(Platform $platform)
    {
        try {
            $result = $platform->delete();
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
}
