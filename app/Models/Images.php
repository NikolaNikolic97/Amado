<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 10.3.2019.
 * Time: 15.12
 */

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
     public function getAll(){
       return  DB::table('images')
           ->get();
     }
    public function getAllImages(){
        return  DB::table('images AS i')
            ->join('posts AS p','i.id_post','=','p.id')
            ->select('*','i.id AS image_id','p.id AS post_id')
            ->paginate(5);
    }
     public function getImage($id){
         return DB::table('images AS i')
             ->where('i.id','=',$id)
             ->first();
     }

     public function getSpecImgForPost($id){
         return DB::table('images')
             ->where('id_post','=',$id)
             ->get();
     }

     public function insertImage($src,$alt,$post){
         return DB::table('images')
             ->insert([
                 'src'=>$src,
                 'alt'=>$alt,
                 'id_post'=>$post
             ]);
     }
     public function updateImage($src,$alt,$post,$id){
         return DB::table('images')
             ->where('id','=',$id)
             ->update([
                 'src'=>$src,
                 'alt'=>$alt,
                 'id_post'=>$post
             ]);
     }
     public function deleteImg($id){
         DB::table('images')
             ->where(
                 'id','=',$id
             )
             ->delete();
     }

}