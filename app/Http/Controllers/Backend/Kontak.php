<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KontakModel;

class Kontak extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->KontakModel = new KontakModel();


    }
    public function index(){
        $menu_active = [
            'title' => 'Kontak | Jasa Marketing K2',
            'menuClose' => 'menu-close',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'no-active',
            'kontak' => 'active'
        ];
        $query = [
            'dataKontak' => $this->KontakModel->showAll(),
            'countDataKontak' => $this->KontakModel->countDataKontak(),
        ];
        return view('Backend.Kontak.Kontak', $menu_active, $query);
    }

    public function detailKontak($id){
        $menu_active = [
            'title' => 'Kontak | Jasa Marketing K2',
            'menuClose' => 'menu-close',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'no-active',
            'kontak' => 'active'
        ];
        $query = [
            'dataKontak'=> $this->KontakModel->showDetailKontak($id),
            'countDataKontak' => $this->KontakModel->countDataKontak(),
        ];
        return view('Backend.Kontak.View',$menu_active,$query);
    }

    public function deleteKontak($id){
        $this->KontakModel->deleteKontak($id);
        return redirect()->route('kontak')->with('pesan', 'Data Kontak Berhasil Dihapus !!!!');
    }
}
