<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontBlogsController extends Controller
{

    public function show($slug)
    {
        $data = Blog::where('slug', $slug)->first();

        if (empty($data)) return redirect()->route('home');
        return view('layouts.front-blogs',[
            'data' => $data
        ]);
    }
}
