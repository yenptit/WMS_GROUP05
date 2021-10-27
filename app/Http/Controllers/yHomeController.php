<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yHomeController extends Controller
{
    public function home()
    {
      $titleName = "HomePage";
      return view('pages.yHome', compact('titleName'));
    }
}