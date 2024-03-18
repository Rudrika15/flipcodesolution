<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()

    {

        $sliders = Slider::latest()->paginate(5);

        return view('admin.sliders.index', compact('sliders'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()

    {

        return view('admin.sliders.create');
    }




    public function store(Request $request)

    {

        $request->validate([

            'type' => 'required',

            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        $slider = Slider::create($request->all());

        $slider->photo = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('sliderImages'), $slider->photo);
        $slider->save();
        return redirect()->route('sliders.index')

            ->with('success', 'Slider created successfully.');
    }


    public function show($id)

    {

        $sliders = Slider::findOrFail($id);

        return view('admin.sliders.show', compact('sliders'));
    }



    public function edit($id)

    {
        $sliders = Slider::findOrFail($id);
        return view('admin.sliders.edit', compact('sliders'));
    }


    public function update(Request $request, $id)

    {

        $request->validate([

            'type' => 'required',

            // 'photo' => 'required',
        ]);


        $sliders = Slider::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = 'sliderImages' . $sliders->photo;
            if (File::exists($photo)) {
                File::delete($photo);
            }


            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $photo = time() . '.' . $extension;
            $file->move('sliderImages', $photo);
            $sliders->photo = $photo;
        }

        $sliders->type = $request->type;
        // $sliders->photo = $request->photo;

        // $sliders->photo = time() . '.' . $request->photo->extension();
        // $request->photo->move(public_path('sliderImages'), $sliders->photo);

        $sliders->update();

        return redirect()->route('sliders.index')

            ->with('success', 'Slider updated successfully');
    }

    public function destroy($id)

    {

        $sliders = Slider::whereId($id)->first();

        $sliders->delete();

        return redirect()->route('sliders.index')

            ->with('success', 'Slider deleted successfully');
    }
}
