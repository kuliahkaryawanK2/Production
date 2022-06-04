<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogModel;
use App\KontakModel;

class Dashboard extends Controller
{
    private $BlogModel;
    public function __construct()
    {
        $this->middleware('auth');
        $this->BlogModel = new BlogModel();
        $this->KontakModel = new KontakModel();
    }

    public function index()
    {
        $menu_active = [
            'title' => 'Admin | Jasa Marketing K2',
            'menuClose' => 'menu-close',
            'dashboard' => 'active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'no-active',
            'kontak' => 'no-active'
        ];
        $query = [
            'countBlog' => $this->BlogModel->countDataBlog(),
            'countKontak' => $this->KontakModel->countDataKontak(),
        ];
        return view('Backend/Dashboard', $menu_active,$query);
    }
}
