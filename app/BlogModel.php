<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    public function showAll()
    {
        return DB::table('blogs')->get();
    }
    public function countDataBlog()
    {
        return DB::table('blogs')->count();
    }

    public function insertBlog($data)
    {
        return DB::table('blogs')->insert($data);
    }

    public function showDetailBlog($id)
    {
        return DB::table('blogs')->where('id', $id)->first();
    }

    public function updateDataBlog($id,$data)
    {
        return DB::table('blogs')->where('id',$id)->update($data);
    }

    public function deleteBlog($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
    }
}
