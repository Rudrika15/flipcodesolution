<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        $careers = Career::orderBy('id', 'DESC')->paginate(10);
        return view('admin.careers.index', compact('careers'));
    }
}
