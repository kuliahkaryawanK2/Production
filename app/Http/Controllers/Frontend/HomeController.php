<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->BlogModel = new BlogModel;
    }

    public function index(){
        $query = [
            'dataBlog' => $this->BlogModel->showAll(),
        ];
        return view('Frontend.Home',$query);
    }


}
