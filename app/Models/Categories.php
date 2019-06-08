<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    public function getAll(){
        return DB::table('categories')->paginate(5);
    }
    public function getOneCategory($id){
        return DB::table('categories')
            ->where('id','=',$id)
            ->first();
    }

    public function insert($cat){
        return DB::table('categories')
            ->insert([
                'category'=>$cat
            ]);
    }

    public function updateCategory($cat,$id){
        return DB::table('categories')
            ->where('id','=',$id)
            ->update([
                'category'=>$cat
            ]);
    }

    public function deleteCategory($id){
        return DB::table('categories')
            ->where('id','=',$id)
            ->delete();
    }
}
