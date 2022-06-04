<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Portofolio extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $menu_active = [
            'title' => 'Portofolio | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'no-active',
            'kontak' => 'no-active'
        ];
        return view('Backend.Portofolio.Portofolio', $menu_active);
    }

}
