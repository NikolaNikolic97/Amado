<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserEditValidation;
use App\Http\Requests\UserInsertValidation;
use App\Models\Role;
use App\Models\Users;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usersController extends Controller
{
    private $users;
    private $role;
    private $data = [];
    public function __construct()
    {
        $this->users = new Users();
        $this->role = new Role();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allUsers = $this->users->getAll();
        $this->data['users'] = $allUsers;
        return view('admin.users.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = $this->role->role();
        $this->data['role']=$role;
        return view('admin.users.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInsertValidation $request)
    {
        $userName = $request->input('username');
        $password = $request->input('password');
        $fullName = $request->input('fullName');
        $email = $request->input("email");
        $role = $request->input('role');
        $active = $request->input('active');
        try{
             $this->users->insert($fullName,$userName,$email,$password,$role,$active);
            return redirect("admin/users")->with("msg","Successfull insert");
        }
        catch (QueryException $e){
            \Log::info("nesto".$e->getMessage());
            return redirect("admin/users")->with("msg_error","Error with insert");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $role = $this->role->role();
        $user = $this->users->getUser($id);
        $this->data['user']=$user;
        $this->data['role']=$role;
        return view('admin.users.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditValidation $request, $id)
    {
        $userName = $request->input('username');
        $password = $request->input('password');
        $fullName = $request->input('fullName');
        $email = $request->input("email");
        $role = $request->input('role');
        $active = $request->input('active');
        try{
            $this->users->update($fullName,$userName,$email,$password,$role,$active,$id);
            return redirect("admin/users")->with("msg","Successfull update");
        }
        catch (QueryException $e){
            \Log::info("nesto".$e->getMessage());
            return redirect("admin/users")->with("msg_error","Error with update");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->users->delete($id);
            response(null,204);
        }
        catch (QueryException $e){
            \Log::info('error '.$e->getMessage());
        }

    }
}
