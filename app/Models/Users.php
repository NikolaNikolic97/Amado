<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 4.3.2019.
 * Time: 20.49
 */

namespace App\Models;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;


class Users
{
    public function login($userName,$pass){
        return DB::table("users AS t")->select('*','t.id AS id_user')
        ->join("role AS r","t.id_role","=","r.id")
        ->where([
                ['user_name','=',$userName],
                ['password','=',md5($pass)]
        ])->orWhere([
                ['email','=',$userName],
                ['password','=',md5($pass)]
        ])
            ->first();
    }
    public function registration($fullName,$userName,$email,$password,$token){
        $id = DB::table("users")->insertGetId([
            'full_name'=>$fullName,
            'user_name'=>$userName,
            'email'=>$email,
            'password'=>md5($password),
            'id_role'=>2,
            'activated'=>0,
            'token'=>$token
        ]);
        return $id;
    }
    public function getAll(){
    return DB::table('users AS u')
        ->join('role AS r','u.id_role','=','r.id')
        ->select('*','u.id AS user_id')
        ->paginate(5);
}
    public function getUser($id){
        return DB::table('users AS u')
            ->join('role AS r','u.id_role','=','r.id')
            ->select('*','u.id AS user_id')
            ->where([
                ['u.id','=',$id]
            ])
            ->first();
    }
    public function insert($fullName,$userName,$email,$password,$role,$active){
        if($active == 'on') $active = 1;
        else $active = 0;
        DB::table("users")->insert([
            'full_name'=>$fullName,
            'user_name'=>$userName,
            'email'=>$email,
            'password'=>md5($password),
            'id_role'=>$role,
            'activated'=>$active,
            'token'=>''
        ]);
    }
    public function update($fullName,$userName,$email,$password,$role,$active,$id){
        if($active == 'on') $active = 1;
        else $active = 0;
        DB::table('users AS u')
            ->where([
                ['u.id','=',$id]
            ])
            ->update([
                'full_name'=>$fullName,
                'user_name'=>$userName,
                'email'=>$email,
                'password'=>md5($password),
                'id_role'=>$role,
                'activated'=>$active,
                'token'=>''
            ]);
    }

    public function delete($id){
        DB::table('users')
            ->where(
                'id','=',$id
            )
            ->delete();
    }

    public function activateUser($token){
        $user = DB::table('users')
            ->where([
                ['activated','=','0'],
                ['token','=',$token]
            ])
            ->first();
        if($user){
            try{
                return  DB::table('users')
                    ->update([
                        'activated'=>1
                    ]);
            }
            catch (QueryException $e){
                \Log::info($e->getMessage());
            }
            }
        else return 0;

    }


}