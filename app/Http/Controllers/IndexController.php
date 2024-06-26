<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Complain;
use App\Models\Faq;
use App\Notifications\AdminContactNotification;
use App\Notifications\FaqNotification;
use App\Notifications\NewVolunteerNotification;
use App\Models\Setting;
use App\Models\User;
use App\Models\Volunteer;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Image;

class IndexController extends MainController
{
    public function index()
    {

        $data['about'] = DB::table('about_us')->first();

        $data['services']  = DB::table('services')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $data['teams']  = DB::table('teams')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $data['abouts']  = DB::table('about_us_items')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();


        $data['setting'] = DB::table('settings')
            ->where('id', 1)
            ->first();


        $data['blogs'] = DB::table('blog_posts')
            ->join('categories', 'blog_posts.category_id', '=', 'categories.id')
            ->select('blog_posts.*', 'categories.name as category_name')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();


        $data['testimonials'] = DB::table('testimonials')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        // dd($data);

        return view('frontend.index', $data);
    }


    public function about()
    {
        return view('frontend.pages.about.about');
    }


    public function cause()
    {
        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();
        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        $data['featuredCause'] = DB::table('causes')
            ->where('featured', true)
            ->first();

        $data['faqs'] = Faq::latest() // Retrieve the latest blog
            ->where('active', 1)
            ->take(6)
            ->get();

        return view('frontend.pages.cause.cause', $data);
    }

    public function causeDetail($id)
    {
        $data['cause'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->where('causes.id', '=', $id)
            ->first();

        $data['recentCauses'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->where('causes.id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();

        $data['cause_categories'] = DB::table('cause_categories')
            ->orderBy('created_at', 'desc')
            ->get();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.cause.detail', $data);
    }


    public function causeByCat($name)
    {

        $data['cause_category'] = DB::table('cause_categories')
            ->where('name', '=', $name)
            ->first();
        // dd($cause_category_id);
        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->where('causes.cause_category_id', '=', $data['cause_category']->id)
            ->get();


        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.cause.cause_cat', $data);
    }


    public function event()
    {
        $data['events']  = DB::table('events')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.event.event', $data);
    }

    public function eventDetail($id)
    {
        $data['event']  = DB::table('events')
            ->join('event_organizers', 'events.event_organizer_id', '=', 'event_organizers.id')
            ->select(
                'events.*',
                'event_organizers.name',
                'event_organizers.email',
                'event_organizers.phone',
                'event_organizers.website'
            )
            ->where('active', 1)
            ->where('events.id', '=', $id)
            ->first();

        // dd($data);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.event.detail', $data);
    }



    public function blog()
    {

        $data['blogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->where('active', 1)
            ->paginate(6);


        $data['resentBlogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->orderBy('blog_posts.created_at', 'desc')
            ->where('active', 1)
            ->take(3)
            ->get();


        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();


        $data['categories'] = Category::all();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.blog.blog', $data);
    }

    public function blogDetail($id)
    {

        $data['resentBlogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->orderBy('blog_posts.created_at', 'desc')
            ->where('active', 1)
            ->take(3)
            ->get();


        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();

        $data['blog'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->where('id', '=', $id)
            ->where('active', 1)
            ->first();

        $data['categories'] = Category::all();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        // dd($data);
        return view('frontend.pages.blog.detail', $data);
    }


    public function contact()
    {
        $setting = Setting::where('id', 1)->first();
        return view('frontend.pages.contact.contact', compact('setting'));
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all(); // Get all form data

        // Save the data to the database (assuming you have a Model for members)
        Complain::create($data);


        $adminUser = User::where('email', 'adesanjo470@gmail.com')->first();

        if ($adminUser) {
            $adminUser->notify(new AdminContactNotification($data));
        }

        return response()->json(['success' => true, 'message' => 'Thank you for contacting us; we\'ll get back to you as soon as possible.']);
    }


    public function donation()
    {
        $data['faqs'] = Faq::latest() // Retrieve the latest blog
            ->where('active', 1)
            ->take(6)
            ->get();
        return view('frontend.pages.donation.donation', $data);
    }
    public function faq()
    {
        $data['faqs'] = Faq::latest() // Retrieve the latest blog
            ->where('active', 1)
            ->get();

        return view('frontend.pages.faq.faq', $data);
    }


    public function faqNotification(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all(); // Get all form data

        $adminUser = User::where('email', 'adesanjo470@gmail.com')->first();

        if ($adminUser) {
            $adminUser->notify(new FaqNotification($data));
        }

        return response()->json(['success' => true, 'message' => 'Feel free to reach out if you have more questions. We\'re here to help. Thank you!']);
    }



    public function video()
    {
        return view('frontend.pages.gallery.video');
    }

    public function gallery()
    {
        $data['galleries'] = DB::table('galleries')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.gallery.gallery', $data);
    }

    public function volunteer()
    {
        $data['volunteers'] = DB::table('volunteers')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();


        $data['faqs'] = Faq::latest() // Retrieve the latest blog
            ->where('active', 1)
            ->take(6)
            ->get();

        return view('frontend.pages.gallery.volunteer', $data);
    }

    public function becomeVolunteer()
    {
        $data['volunteers'] = DB::table('volunteers')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        $data['faqs'] = Faq::latest() // Retrieve the latest blog
            ->where('active', 1)
            ->take(6)
            ->get();

        return view('frontend.pages.gallery.become', $data);
    }


    public function volunteerDetail($id)
    {
        $data['volunteer']  = DB::table('volunteers')
            ->where('active', 1)
            ->where('volunteers.id', '=', $id)
            ->first();


        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.gallery.detail', $data);
    }


    public function memberFrontend(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048', // Adjust file validation rules as needed
            'name' => 'required',
            'personal_experience' => 'required',
            'position' => '',
            'email' => 'required',
            'phone' => 'required',
            'skills' => 'nullable', // Make sure to include skills field
        ]);

        $data = $request->all(); // Get all form data

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/volunteer/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->resize(700, 624, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the data array
            $data['image_url'] = 'uploads/volunteer/' . $imageName;
        }
        $data['position'] = 'volunteer';
        // Save the data to the database (assuming you have a Model for members)
        Volunteer::create($data);


        $adminUser = User::where('email', 'adesanjo470@gmail.com')->first();

        if ($adminUser) {
            $adminUser->notify(new NewVolunteerNotification($data));
        }

        return response()->json(['success' => true, 'message' => 'Thank you for registering, we will contact you soon']);
    }
}
