<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yPagesController extends Controller
{
    public function index()
    {
        $titleName = "HomePage";
        return view('pages.yIndex', compact('titleName'));

        // $titleName = "{{url ('resources/views/welcome.blade.php')}}";
        // return view('pages.yIndex', compact('titleName'));
        // return view('pages.yIndex');
    }

    public function about()
    {
        $title = "About Us";
        return view('pages.yAbout')->with('title', $title);
    }

    public function contact()
    {
        $data = array();
        $data['title'] = "Contact";
        return view('pages.yContact')->with($data);
    }
}
