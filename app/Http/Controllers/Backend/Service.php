<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Service extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $menu_active = [
            'title' => 'Service | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'active',
            'blog' => 'no-active',
            'kontak' => 'no-active'
        ];
        return view('Backend.Service.Service', $menu_active);
    }
}
