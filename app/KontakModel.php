<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KontakModel extends Model
{
    public function showAll()
    {
        return DB::table('kontak')->get();
    }
    public function countDataKontak()
    {
        return DB::table('kontak')->count();
    }

    public function insertKontak($data)
    {
        return DB::table('kontak')->insert($data);
    }

    public function showDetailKontak($id)
    {
        return DB::table('kontak')->where('id', $id)->first();
    }
    public function deleteKontak($id)
    {
        DB::table('kontak')->where('id', $id)->delete();
    }
}
