<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()

    {
        $blogs = Blog::with('tech')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }



    public function create()
    {
        $technology = Technology::all();
        return view('admin.blogs.create', compact('technology'));
    }




    public function store(Request $request)

    {

        $request->validate([

            'title' => 'required',

            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'detail' => 'required',

            'techid' => 'required',

        ]);

        $slug = $request->title;
        $slug1 = str_replace(' ', '-', $slug);
        $blog = new Blog();
        $blog->title     = $request->title;
        $blog->slug     = $slug1;
        $blog->detail     = $request->detail;
        $blog->techid     = $request->techid;

        if ($request->hasFile('photo')) {
            $blog->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('blogImages'), $blog->photo);
        }


        $blog->save();
        return redirect()->route('blogs.index')

            ->with('success', 'Blog created successfully.');
    }


    public function show($id)

    {

        $blogs = Blog::findOrFail($id);

        return view('admin.blogs.show', compact('blogs'));
    }



    public function edit($id)

    {
        $technology = Technology::all();
        $blogs = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blogs', 'technology'));
    }


    public function update(Request $request, $id)

    {

        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'techid' => 'required',

        ]);

        $slug = $request->title;
        $slug1 = str_replace(' ', '-', $slug);
        $blog = Blog::findOrFail($id);
        $blog->title     = $request->title;
        $blog->slug     = $slug1;
        $blog->detail     = $request->detail;
        $blog->techid     = $request->techid;
        if ($request->hasFile('photo')) {
            $photo = 'blogImages' . $blog->photo;
            if (File::exists($photo)) {
                File::delete($photo);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $photo = time() . '.' . $extension;
            $file->move('blogImages', $photo);
            $blog->photo = $photo;
        }




        $blog->update();

        return redirect()->route('blogs.index')

            ->with('success', 'Blog updated successfully');
    }

    public function destroy($id)

    {

        $blogs = Blog::whereId($id)->first();

        $blogs->delete();

        return redirect()->route('blogs.index')

            ->with('success', 'Blog deleted successfully');
    }
}
