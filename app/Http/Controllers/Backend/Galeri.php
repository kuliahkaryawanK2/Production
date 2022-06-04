<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GaleriModel;
use Illuminate\Support\Carbon;

class Galeri extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->GaleriModel = new GaleriModel();
    }
    public function index(){
        $menu_active = [
            'title' => 'Galeri | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'active',
            'service' => 'no-active',
            'blog' => 'no-active',
            'kontak' => 'no-active'
        ];
        $query = [
            'dataGaleri' => $this->GaleriModel->showAll()
        ];
        return view('Backend.Galeri.Galeri', $menu_active,$query);
    }

    public function addGaleri(){
        $menu_active = [
            'title' => 'Add Galeri | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'active',
            'service' => 'no-active',
            'blog' => 'no-active',
            'kontak' => 'no-active'
        ];
        $query = [
            'date' => Carbon::now()
        ];
        return view('Backend.Galeri.Add',$menu_active,$query);
    }

    public function addDataGaleri(){
        Request()->validate(
            [
                'name_image' => 'required|min:3',
                'category' => 'required',
                'image' => 'required|mimes:jpg,jpeg,bmp,png',
            ],
            //pesan erorr
            [
                'name_image.required' => 'Nama Foto diisi tidak boleh kosong !!!',
                'name_image.min' => 'Nama Foto Minimal 3 Huruf',
                'category.required' => 'Kategori Wajib Diisi Tidak Boleh Kosong !!!',
                'image.required' => 'Foto Wajib diisi !!!',
                'image.mimes' => 'Foto Harus format JPG, PNG, JPEG, BMP',
            ]
        );

        $file = Request()->image;
        $fileName = Request()->name_image . '.' . $file->extension();
        $file->move(base_path() . '/public/galeri', $fileName);
        $data = [
            'name_image' => Request()->name_image,
            'category' => Request()->category,
            'image' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $this->GaleriModel->insertGaleri($data);
        return redirect()->route('galeri')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function deleteGaleri($id)
    {
        $galeri = $this->GaleriModel->showDetailGaleri($id);
        if ($galeri->image <> "") {
            unlink(base_path('public/galeri') . '/' . $galeri->image);
        }
        $this->GaleriModel->deleteGaleri($id);
        return redirect()->route('galeri')->with('pesan', 'Data Galeri Berhasil Dihapus !!!!');
    }
}
