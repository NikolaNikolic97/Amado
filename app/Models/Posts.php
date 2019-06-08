<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posts extends Model
{
    public $fileName;
    public $desc;
    public $name;
    public $price;
    public $category;
    public $brand;
    public $quantity;
    public $imgPath;
    public $timestamps = false;

    public function getAll(){
        return DB::table('posts AS p')
            ->join('brands AS b','p.id_brand','=','b.id')
            ->join('categories AS c','p.id_category','=','c.id')
            ->select('*','p.id as id_post')
            ->paginate(5);
    }
    public function getLastTwelvePosts(){
        return DB::table('posts AS p')
             ->join('images AS i','p.id','=','i.id_post')
            ->join('brands AS b','p.id_brand','=','b.id')
            ->join('categories AS c','p.id_category','=','c.id')
            ->select('*','p.id as id_post','i.id as id_img')
            ->paginate(12);
    }

    public function getAllPosts(){
        return DB::table('posts AS p')
            ->join('brands AS b','p.id_brand','=','b.id')
            ->join('categories AS c','p.id_category','=','c.id')
            ->select('*','p.id as id_post')
            ->paginate(6);
    }

    public function getPost($id){
        return DB::table('posts AS p')
            ->join('categories AS c','p.id_category','=','c.id')
            ->where([
                ['p.id','=',$id]
            ])
            ->select('*','p.id AS id_post')
            ->first();
    }

    public function insertPost(){
        try{
            DB::transaction(function (){
                $id = DB::table('posts')->insertGetId([
                    'description'=>$this->desc,
                    'name'=>$this->name,
                    'price'=>$this->price,
                    'id_category'=>$this->category,
                    'id_brand'=>$this->brand,
                    'quantity'=>$this->quantity
                ]);
                DB::table('images')->insert([
                    'src'=>$this->imgPath.'/'.$this->fileName,
                    'alt'=>$this->fileName,
                    'id_post'=>$id
                ]);
            });
        }
        catch (\Throwable $e){
            \Log::critical('Fail to insert post');
            throw new \Exception('Error with insert');
        }

    }

    public function updatePost($id){
        return DB::table('posts')
            ->where('id','=',$id)
            ->update([
                'description'=>$this->desc,
                'name'=>$this->name,
                'price'=>$this->price,
                'id_category'=>$this->category,
                'id_brand'=>$this->brand,
                'quantity'=>$this->quantity
            ]);
    }


    public function deletePost($id){
        DB::table('posts')
            ->where(
                'id','=',$id
            )
            ->delete();
    }

    public function filtering($category,$brands,$sort,$price,$search,$page){
        $query = DB::table('posts AS p');


        if($search){
            $query = $query->where('name','like','%'.$search.'%');
        }
        if($category){
            $query = $query->whereIn('id_category',$category);
        }
        if($brands){
            $query = $query->whereIn('id_brand',$brands);
        }
        if($sort){
            if($sort == 'ascName') $query = $query->orderBy('name');
            if($sort == 'descName') $query = $query->orderBy('name','desc');
            if($sort == 'ascPrice') $query = $query->orderBy('price');
            if($sort == 'descPrice') $query = $query->orderBy('price','desc');

        }
        if ($price){
            $query=$query->whereBetween('price', [$price[0], $price[1]]);
        }
            $broj=$query->count();
            $upit=$query->offset($page)
                ->limit(6)
                ->get();
        return ['count'=>$broj,'posts'=>$upit];
    }

    ////////////////////////// ANALITICS ////////////////////////////////////

    public function itemsSold(){
        return DB::table('checkout')
            ->sum('quantity');
    }
    public function totalEarnings(){
        $upit = 'select sum(ck.quantity*p.price) AS sum
                                from posts p inner join checkout ck 
                                 on p.id=ck.id_post';
       return DB::select( DB::raw($upit) );
    }



}
