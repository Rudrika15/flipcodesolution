<?php

namespace App\Http\Controllers\admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()

    {

        $portfolios = Portfolio::latest()->paginate(5);

        return view('admin.portfolios.index', compact('portfolios'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()

    {

        return view('admin.portfolios.create');
    }




    public function store(Request $request)

    {

        $request->validate([

            'techid' => 'required',

            'name' => 'required',

            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'link' => 'required',

            'detail' => 'required',

        ]);



        $portfolio = Portfolio::create($request->all());

        $portfolio->photo = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('portfolioImages'), $portfolio->photo);
        $portfolio->save();
        return redirect()->route('portfolios.index')

            ->with('success', 'Portfolio created successfully.');
    }


    public function show($id)

    {

        $portfolios = Portfolio::findOrFail($id);

        return view('admin.portfolios.show', compact('portfolios'));
    }



    public function edit($id)

    {
        $portfolios = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit', compact('portfolios'));
    }


    public function update(Request $request, $id)

    {

        $request->validate([

            'techid' => 'required',

            'name' => 'required',

            // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'link' => 'required',

            'detail' => 'required',
        ]);


        $portfolios = Portfolio::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = 'portfolioImages' . $portfolios->photo;
            if (File::exists($photo)) {
                File::delete($photo);
            }


            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $photo = time() . '.' . $extension;
            $file->move('portfolioImages', $photo);
            $portfolios->photo = $photo;
        }

        $portfolios->techid = $request->techid;
        $portfolios->name = $request->name;
        $portfolios->link = $request->link;
        $portfolios->detail = $request->detail;

        // $portfolios->photo = time() . '.' . $request->photo->extension();
        // $request->photo->move(public_path('portfolioImages'), $portfolios->photo);
        $portfolios->update();



        return redirect()->route('portfolios.index')

            ->with('success', 'Portfolio updated successfully');
    }

    public function destroy($id)

    {

        $portfolios = Portfolio::whereId($id)->first();

        $portfolios->delete();

        return redirect()->route('portfolios.index')

            ->with('success', 'Portfolio deleted successfully');
    }
}
