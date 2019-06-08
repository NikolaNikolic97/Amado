<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brands extends Model
{
    public function getAll(){
        return DB::table('brands')->paginate(5);
    }
    public function getOneBrand($id){
        return DB::table('brands')
            ->where('id','=',$id)
            ->first();
    }

    public function insert($brand){
        return DB::table('brands')
            ->insert([
                'brand'=>$brand
            ]);
    }

    public function updateBrand($brand,$id){
        return DB::table('brands')
            ->where('id','=',$id)
            ->update([
                'brand'=>$brand
            ]);
    }

    public function deleteBrand($id){
        return DB::table('brands')
            ->where('id','=',$id)
            ->delete();
    }
}
