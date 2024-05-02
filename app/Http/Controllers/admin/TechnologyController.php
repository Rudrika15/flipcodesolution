<?php

namespace App\Http\Controllers\admin;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TechnologyController extends Controller
{
    public function index()

    {

        $technology = Technology::latest()->paginate(5);

        return view('admin.technology.index', compact('technology'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()

    {

        return view('admin.technology.create');
    }




    public function store(Request $request)

    {

        $request->validate([

            'techname' => 'required|unique:technologies',

            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'detail' => 'required',
        ]);



        $technology = Technology::create($request->all());

        $technology->photo = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('technologyImages'), $technology->photo);
        $technology->save();
        return redirect()->route('technology.index')

            ->with('success', 'Technology created successfully.');
    }


    public function show($id)

    {

        $technology = Technology::findOrFail($id);

        return view('admin.technology.show', compact('technology'));
    }



    public function edit($id)

    {
        $technology = Technology::findOrFail($id);

        $tecnology = Technology::where('id', $id)->first();
        return view('admin.technology.edit', compact('technology'));
    }


    public function update(Request $request, $id)

    {

        $request->validate([

            'techname' => 'required|unique:	technologies',

            // 'photo' => 'required',

            'detail' => 'required',
        ]);


        $technology = Technology::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = 'technologyImages' . $technology->photo;
            if (File::exists($photo)) {
                File::delete($photo);
            }


            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $photo = time() . '.' . $extension;
            $file->move('technologyImages', $photo);
            $technology->photo = $photo;
        }

        $technology->techname = $request->techname;
        // $technology->photo = $request->photo;
        $technology->detail = $request->detail;

        // $technology->photo = time() . '.' . $request->photo->extension();
        // $request->photo->move(public_path('technologyImages'), $technology->photo);
        $technology->save();


        return redirect()->route('technology.index')

            ->with('success', 'Technology updated successfully');
    }

    public function destroy($id)

    {

        $technology = Technology::whereId($id)->first();

        $technology->delete();

        return redirect()->route('technology.index')

            ->with('success', 'Technology deleted successfully');
    }
}
