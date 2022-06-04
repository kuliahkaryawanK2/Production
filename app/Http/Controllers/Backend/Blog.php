<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogModel;
use Illuminate\Support\Carbon;


class Blog extends Controller
{

    private $BlogModel;

    public function __construct()
    {

        $this->middleware('auth');
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        $menu_active = [
            'title' => 'Blog | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'active',
            'kontak' => 'no-active'
        ];
        $query = [
            'dataBlog' => $this->BlogModel->showAll(),

        ];
        return view('Backend.Blog.Blog', $menu_active, $query);
    }

    public function addBlog()
    {
        $menu_active = [
            'title' => 'Add Blog | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'active',
            'kontak' => 'no-active',
            'date' => Carbon::now()->locale('id')->isoFormat('LL'),
        ];
        return view('Backend.Blog.Add', $menu_active);
    }

    public function addDataBlog()
    {
        Request()->validate(
            [
                'meta_desc' => 'required|min:3',
                'meta_keyword' => 'required',
                'judul' => 'required',
                'judul_short' => 'required',
                'isi' => 'required',
                'image' => 'required|mimes:jpg,jpeg,bmp,png',
            ],
            //pesan erorr
            [
                'meta_desc.required' => 'Meta Description diisi tidak boleh kosong !!!',
                'meta_desc.min' => 'Meta Description Minimal 3 Huruf',
                'meta_keyword.required' => 'Meta Keywords Wajib Diisi Tidak Boleh Kosong !!!',
                'judul.required' => 'Judul Blog Wajib Diisi Tidak Boleh Kosong !!!,',
                'judul_short.required' => 'Ringkasan Blog Wajib Diisi Tidak Boleh Kosong !!!,',
                'isi.required' => 'Content Blog Wajib Diisi Tidak Boleh Kosong !!!',
                'image.required' => 'Foto Wajib diisi !!!',
                'image.mimes' => 'Foto Harus format JPG, PNG, JPEG, BMP',
            ]
        );

        $file = Request()->image;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(base_path() . '/public/blog', $fileName);
        $view = 0;
        $data = [
            'meta_desc' => Request()->meta_desc,
            'meta_key' => Request()->meta_keyword,
            'judul' => Request()->judul,
            'judul_short' => Request()->judul_short,
            'isi' => Request()->isi,
            'views' => $view,
            'image' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $this->BlogModel->insertBlog($data);
        return redirect()->route('blog')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function detailBlog($id)
    {
        $menu_active = [
            'title' => 'Detail Blog | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'active',
            'kontak' => 'no-active'
        ];
        if (!$this->BlogModel->showDetailBlog($id)) {
            abort(404);
        }
        $query = [
            'detailBlog' => $this->BlogModel->showDetailBlog($id),
        ];


        return view('Backend.Blog.View', $query, $menu_active);
    }

    public function deleteBlog($id)
    {
        $blog = $this->BlogModel->showDetailBlog($id);
        if ($blog->image <> "") {
            unlink(base_path('/public/blog') . '/' . $blog->image);
        }
        $this->BlogModel->deleteBlog($id);
        return redirect()->route('blog')->with('pesan', 'Data Blog Berhasil Dihapus !!!!');
    }

    public function updateBlog($id)
    {
        $menu_active = [
            'title' => 'Update Blog | Jasa Marketing K2',
            'menuClose' => 'menu-open',
            'dashboard' => 'no-active',
            'portofolio' => 'no-active',
            'galeri' => 'no-active',
            'service' => 'no-active',
            'blog' => 'active',
            'kontak' => 'no-active'
        ];
        if (!$this->BlogModel->showDetailBlog($id)) {
            abort(404);
        }
        $query = [
            'dataBlog' => $this->BlogModel->showDetailBlog($id),
            'date' => Carbon::now(),
        ];
        return view('Backend.Blog.Update', $menu_active, $query);
    }

    public function updateDataBlog($id)
    {
        Request()->validate(
            [
                'meta_desc' => 'required|min:3',
                'meta_keyword' => 'required',
                'judul' => 'required',
                'judul_short' => 'required',
                'isi' => 'required',
                'image' => 'mimes:jpg,jpeg,bmp,png',
            ],
            [
                'meta_desc.required' => 'Meta Description diisi tidak boleh kosong !!!',
                'meta_desc.min' => 'Meta Description Minimal 3 Huruf',
                'meta_keyword.required' => 'Meta Keywords Wajib Diisi Tidak Boleh Kosong !!!',
                'judul.required' => 'Judul Blog Wajib Diisi Tidak Boleh Kosong !!!,',
                'judul_short.required' => 'Ringkasan Blog Wajib Diisi Tidak Boleh Kosong !!!,',
                'isi.required' => 'Content Blog Wajib Diisi Tidak Boleh Kosong !!!',

                'image.mimes' => 'Foto Harus format JPG, PNG, JPEG, BMP',
            ]
        );
        if (Request()->image <> "") {
            $file = Request()->image;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(base_path('/public/blog'), $fileName);

            $data = [
                'meta_desc' => Request()->meta_desc,
                'meta_key' => Request()->meta_keyword,
                'judul' => Request()->judul,
                'judul_short' => Request()->judul_short,
                'isi' => Request()->isi,
                'image' => $fileName,
                'updated_at' => Carbon::now(),
            ];
            $this->BlogModel->updateDataBlog($id, $data);
        } else {
            $data = [
                'meta_desc' => Request()->meta_desc,
                'meta_key' => Request()->meta_keyword,
                'judul' => Request()->judul,
                'judul_short' => Request()->judul_short,
                'isi' => Request()->isi,
                'updated_at' => Carbon::now(),
            ];
            $this->BlogModel->updateDataBlog($id, $data);
        }
        return redirect()->route('blog')->with('pesan', 'Data Blog Berhasil Diupdate');


    }
}
