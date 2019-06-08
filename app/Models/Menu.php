<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Menu
{
    public function getMenu(){
        return DB::table("menu")->paginate(5);
    }

    public function getOneMenu($id){
        return DB::table('menu')
            ->where('id','=',$id)
            ->first();
    }

    public function insert($href,$content){
        return DB::table('menu')->insert([
            'href'=>$href,
            'content'=>$content
        ]);
    }

    public function update($href,$content,$id){
        return DB::table('menu')
            ->where('id','=',$id)
            ->update([
                'href'=>$href,
                'content'=>$content
            ]);
    }

    public function delete($id){
        return DB::table("menu")
            ->where('id','=',$id)
            ->delete();
    }

}
