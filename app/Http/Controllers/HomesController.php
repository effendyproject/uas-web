<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function show()
    {
        $blogs = Blog::paginate(4);
        $testimonials = Testimonial::paginate(5);

        return view('home',[
            'blogs' => $blogs,
            'testimonials' => $testimonials
        ]);
    }
}
