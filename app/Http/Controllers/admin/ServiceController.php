<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()

    {

        $services = Service::latest()->paginate(5);

        return view('admin.services.index', compact('services'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()

    {

        return view('admin.services.create');
    }




    public function store(Request $request)

    {

        $request->validate([

            'title' => 'required|unique:services',

            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'detail' => 'required',
        ]);



        $service = Service::create($request->all());

        $service->photo = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('serviceImages'), $service->photo);
        $service->save();
        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }


    public function show($id)

    {

        $services = Service::findOrFail($id);

        return view('admin.services.show', compact('services'));
    }



    public function edit($id)

    {
        $services = Service::findOrFail($id);
        return view('admin.services.edit', compact('services'));
    }


    public function update(Request $request, $id)

    {

        $request->validate([

            'title' => 'required',

            'detail' => 'required',


        ]);

        $services = Service::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = 'serviceImages' . $services->photo;
            if (File::exists($photo)) {
                File::delete($photo);
            }


            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $photo = time() . '.' . $extension;
            $file->move('serviceImages', $photo);
            $services->photo = $photo;
        }

        $services->title = $request->title;
        $services->update();




        return redirect()->route('services.index')

            ->with('success', 'Service updated successfully');
    }

    public function destroy($id)

    {

        $services = Service::whereId($id)->first();

        $services->delete();

        return redirect()->route('services.index')

            ->with('success', 'Service deleted successfully');
    }
}
