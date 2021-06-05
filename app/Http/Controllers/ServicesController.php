<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show()
    {
        $data = Service::paginate(3);

        if (empty($data)) return redirect()->route('home');
        return view('service',[
            'services' => $data
        ]);
    }
}
