<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\About;
use App\Models\Service;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerMail;
use App\Models\Career;
use App\Models\Contact;

class VisitorController extends Controller
{
    public function homePage()
    {
        $sliders = Slider::all();
        return view('visitor.home', ['sliders' => $sliders]);
    }

    public function aboutPage()
    {
        $abouts = About::first();
        return view('visitor.about', compact('abouts'));
    }

    public function blogPage()
    {
        $blogs = Blog::all();
        $currentTime = Carbon::now()->toTimeString();
        return view('visitor.blog', compact('blogs', 'currentTime'));
    }
    public function blogDetailPage(Request $request, $id)
    {
        $currentTime = Carbon::now()->toTimeString();
        $slug = $request->id;
        $blogs = Blog::where('slug', '=', $slug)->first();

        if ($blogs) {
            return view('visitor.blog-detail', compact('blogs', 'currentTime'));
        } else {
            $message = 'Blog not found.';
            return view('visitor.blog', compact('message'));
        }
    }
    public function servicePage()
    {
        $services = Service::all();
        return view('visitor.service', compact('services'));
    }
    public function contactPage(Request $request)
    {

        return view('visitor.contact');
    }


    public function contact_mail_send(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'email' => 'required|email',
            'contact' => 'required|max:10|min:10|regex:/^[0-9]+$/u',
            'message' => 'required|max:250',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->message = $request->message;
        $contact->save();

        $email = $request->email;
        Mail::to($email)->send(new ContactMail($request));

        $url = $request->currentURL;
        if ($url === url('/contact')) {
            return redirect('GreetingPage');
        } else {
            return redirect()->back()->with('success', 'We will get back to you!');
        }
    }

    public function portfolioPage(Request $request)
    {
        return view('visitor.portfolio');
    }


    public function careerPage(Request $request)
    {
        return view('visitor.career');
    }
    public function career_send_mail(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phoneNo' => 'required|min:10|max:10',
            'file' => 'required'
        ]);

        $career = new Career();
        $career->fullname = $request->fullname;
        $career->email = $request->email;
        $career->address = $request->address;
        $career->city = $request->city;
        $career->zip = $request->zip;
        $career->phoneNo =  $request->input('code') . $request->input('phoneNo');
        $career->file = $request->file;
        $career->save();

        $email = $request->email;
        Mail::to($email)->send(new CareerMail($request));
        return redirect('GreetingPage')->with('success', 'Mail sent to your Gmail ThankYou for Contacting Us!');
    }

    public function GreetingPage()
    {
        return view('visitor.GreetingPage');
    }
}
