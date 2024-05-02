<?php

namespace App\Helpers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;

class Utils
{
    public static function getTimeOrNull($value)
    {
        return isset($value) ? Carbon::createFromFormat("H:i:s", $value) : null;
    }

    public static function isUserAuthorized($id): void
    {
        $loggedInUserId = Auth::id();

        if ($loggedInUserId != $id) {
            throw new UnauthorizedException(config('constants.status.unauthorized'));
        }
    }

    public static function unauthorizedResponse(UnauthorizedException $ex): Response
    {
        return response([
            'success' => false,
            'exception' => $ex->getMessage() //config('constants.status.unauthorized'),
        ], 401);
    }

    public static function successResponse($data = null): Response
    {
        return response([
            'success' => true,
            'data' => $data
        ], 200);
    }

    public static function notFoundResponse(): Response
    {
        return response([
            'success' => false,
            'message' => config('constants.status.not_found')
        ], 404);
    }

    public static function generalErrorResponse(Exception $ex): Response
    {
        return response([
            'success' => false,
            'exception' => $ex->getMessage()
        ], 500);
    }

    public static function invalidInputErrorResponse(ValidationException $ex): Response
    {
        return response([
            'success' => false,
            'exception' => $ex->getMessage()
        ], 405);
    }
}