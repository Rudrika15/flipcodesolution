<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FavoriteSalon;
use App\Models\User;
use App\Models\Salon;

class FavoriteSalonApiController extends Controller
{
    // GET methods
    public function index($id = null) {
        if(!isset($id)) {
            $results = FavoriteSalon::all();
        }
        else {
            $results = FavoriteSalon::where('id', $id)->first();
        }

        return $results;
    }

    public function byUser(User $user) {
        return FavoriteSalon::where('user_id', $user->id)->get();
    }

    public function bySalon(Salon $salon) {
        return FavoriteSalon::where('salon_id', $salon->id)->get();
    }

    // POST method
    public function store(FavoriteSalon $favoriteSalon) {
        request()->validate([
            'salon_id' => 'required',
            'user_id' => 'required'
        ]);

        return FavoriteSalon::create([
            'salon_id' => request('salon_id'),
            'user_id' => request('user_id')
        ]);
    }

    // PUT method
    public function update(FavoriteSalon $favoriteSalon) {
        request()->validate([
            'salon_id' => 'required',
            'user_id' => 'required'
        ]);

        $result = $favoriteSalon->update([
            'salon_id' => request('salon_id'),
            'user_id' => request('user_id')
        ]);

        return ["success" => $result];
    }

    // DELETE method
    public function delete(FavoriteSalon $favoriteSalon) {
        $result = $favoriteSalon->delete();

        return ["success" => $result];
    }
}
