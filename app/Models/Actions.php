<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class Actions extends Model
{
    public function insertAction($user,$action){
        return DB::table('action')
            ->insert([
                'id_user' =>$user,
                'action'=>$action,
                'date'=>time()
            ]);
    }

    public function getAll(){
        return DB::table('action AS a')
            ->join('users AS u','a.id_user','=','u.id')
            ->paginate(10);
    }

    public function filtering($start,$end){
        try{
            $query = DB::table('action AS a')
            ->join('users AS u','a.id_user','=','u.id');

            if ($start != null && $end != null){
                $query=$query->whereBetween('date', [$start, $end]);
            }
            return $query->get();
        }
        catch (QueryException $e){
            var_dump($e->getMessage());
        }

    }
}
