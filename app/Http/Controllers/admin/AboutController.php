<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()

    {

        $abouts = About::latest()->paginate(5);

        return view('admin.about.index', compact('abouts'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()

    {

        return view('admin.about.create');
    }




    public function store(Request $request)

    {

        $request->validate([

            'type' => 'required',

            'about' => 'required',
        ]);



        About::create($request->all());



        return redirect()->route('about.index')

            ->with('success', 'About created successfully.');
    }


    public function show($id)

    {

        $abouts = About::findOrFail($id);

        return view('admin.about.show', compact('abouts'));
    }



    public function edit($id)

    {
        $abouts = About::findOrFail($id);
        return view('admin.about.edit', compact('abouts'));
    }


    public function update(Request $request, $id)

    {

        $request->validate([

            'type' => 'required',

            'about' => 'required',
        ]);



        $abouts = About::where('id', $id)->first();

        $abouts->type = $request->type;
        $abouts->about = $request->about;

        $abouts->save();




        return redirect()->route('abouts.index')

            ->with('success', 'About updated successfully');
    }

    public function destroy($id)

    {

        $abouts = About::whereId($id)->first();

        $abouts->delete();

        return redirect()->route('about.index')

            ->with('success', 'About deleted successfully');
    }
}
