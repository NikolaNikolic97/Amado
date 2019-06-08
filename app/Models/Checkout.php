<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Checkout extends Model
{
    public $posts_ids;
    public $user_id;
    public $quantity;

    public function insertCheckout(){
        return DB::transaction(function (){
            foreach ($this->posts_ids as $post_id){
                DB::table('checkout')
                    ->insert([
                        'id_post'=>$post_id,
                        'id_user'=>$this->user_id,
                        'date'=>time(),
                        'quantity'=>$this->quantity
                    ]);
            }
        });
    }
}
