<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
s
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function index(){


        return view('Frontend.Blog');
    }
}
