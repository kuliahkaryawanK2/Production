<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GaleriModel extends Model
{
    public function showAll()
    {
        return DB::table('galeri')->get();
    }
    public function countDataGaleri()
    {
        return DB::table('galeri')->count();
    }

    public function insertGaleri($data)
    {
        return DB::table('galeri')->insert($data);
    }

    public function showDetailGaleri($id)
    {
        return DB::table('galeri')->where('id', $id)->first();
    }

    public function updateDataGaleri($id,$data)
    {
        return DB::table('galeri')->where('id',$id)->update($data);
    }

    public function deleteGaleri($id)
    {
        DB::table('galeri')->where('id', $id)->delete();
    }
}
