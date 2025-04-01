<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Mail\CareerAdminMail;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\About;
use App\Models\Service;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerMail;
use App\Mail\ContactMailUser;
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
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $currentTime = Carbon::now()->toTimeString();
        return view('visitor.blog', compact('blogs', 'currentTime'));
    }
    public function blogDetailPage(Request $request, $id)
    {
        $currentTime = Carbon::now()->toTimeString();
        $slug = $request->id;

        $blogs = Blog::where('slug', 'Like', '%' . $slug . '%')->first();

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
        // Validate the request
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'email' => 'required|email',
            'contact' => 'required|digits:10|regex:/^[0-9]+$/u',
            'message' => 'required|max:250',
        ]);

        // Save contact information
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->message = $request->message;
        $contact->save();

        // Send email
        $ccAddress = ['ravirajsinh.m.gohil@gmail.com', 'parmarjigardhirajlal@gmail.com']; // Replace with the actual CC email address

        // Send email
        Mail::to('flipcodesolutions@gmail.com')
            ->send(new ContactMail($request, $ccAddress));

        Mail::to($request->email)
            ->send(new ContactMailUser($request));

        // Redirect based on current URL
        $currentURL = $request->input('currentURL', url('/contact')); // Fallback to default URL
        if ($currentURL === url('/contact')) {
            return redirect()->route('GreetingPage'); // Assuming 'GreetingPage' is a named route
        } else {
            return redirect()->back()->with('message', 'We will get back to you!');
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
        set_time_limit(0);

        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNo' => 'required|digits:10',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'city' => 'required',
            'position' => 'required'

        ], [
            'fullname.required' => 'Full name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'phoneNo.required' => 'Phone number is required.',
            'file.required' => 'File is required.',
            'file.mimes' => 'Only PDF, DOC, and DOCX files are allowed.',
            'file.max' => 'File size should not exceed 2MB.',
            'city.required' => 'City is required.',
            'position.required' => 'Position is required.',
        ]);

        // Save data to the Career model
        $career = new Career();
        $career->fullname = $request->fullname;
        $career->email = $request->email;
        $career->address = $request->address;
        $career->city = $request->city;
        $career->phoneNo = $request->phoneNo;
        $career->file = time() . '-' . $request->file->getClientOriginalName();
        $request->file->move(storage_path('uploads'), $career->file);
        $career->save();

        $attachmentPath = storage_path('uploads/' . $career->file);


        // Prepare the data for the user mail
        $userData = [
            'name' => $request->fullname,
            'email' => $request->email,
            'phoneNo' => $request->phoneNo,
            'address' => $request->address,
            'city' => $request->city,
            'jobTitle' => $request->position,
        ];

        // Queue the user email
        Mail::to($career->email)->queue(new CareerMail($userData));

        // Queue the admin email with CC addresses and the attachment
        $ccAddresses = ['ravirajsinh.m.gohil@gmail.com', 'parmarjigardhirajlal@gmail.com'];
        Mail::to('flipcodesolutions@gmail.com')
            ->cc($ccAddresses)
            ->queue(new CareerAdminMail($career, $ccAddresses, $attachmentPath));

        return redirect('GreetingPage')->with('success', 'Mail sent successfully! Thank you for contacting us.');
    }



    public function GreetingPage()
    {
        return view('visitor.GreetingPage');
    }
}
