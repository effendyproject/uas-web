<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function show()
    {
        $data = Blog::paginate(4);

        return view('home',[
            'blogs' => $data
        ]);
    }
}
