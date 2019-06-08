<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactValidation;
use App\Http\Requests\LoginValidation;
use App\Http\Requests\RegistrationValidation;
use App\Models\Actions;
use App\Models\Users;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    protected $users;
    private $action;
    public function __construct()
    {
        $this->users = new Users();
        $this->action = new Actions();
    }
    public function login(LoginValidation $request){
        $userName = $request->input("username");
        $password = $request->input("password");
        $user = $this->users->login($userName,$password);
        if($user){
            $request->session()->put("user",$user);
            $session = $request->session()->get("user");
            $this->action->insertAction($user->id_user,'Logovanje');
            if ($session->role == 'admin')
            return redirect("/admin")->with("msg","You have successfully logged in");
            else
            return redirect("/")->with("msg","You have successfully logged in");
        }
        else  redirect("/")->with("msg_error","Something is wrong");
    }
    public function registration(RegistrationValidation $request){
        $fullName = $request->input("fullName");
        $userName = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");
        $token = md5(time().$email);
        try{
            $to_name = $fullName;
            $to_email = $email;
            $data = array('name'=>$fullName,'token'=>$token);

            Mail::send('emails.registration', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('User registration Amado Shop');
                $message->from('nikola.nikolic.23.16@ict.edu.rs','User registration');
            });
            $userId = $this->users->registration($fullName,$userName,$email,$password,$token);
            $this->action->insertAction($userId,'Registracija');
            return redirect("/")->with("msg","Successfull registration, please activate your account");
        }
        catch (QueryException $exception){
            \Log::info("Unsuccessfull registration ".$exception->getMessage());
            return redirect("/")->with("msg_error","Unsuccessfull registration, error occurred");
        }
        catch (\Exception $exception){
            \Log::info($exception->getMessage());
        }


    }
    public function activateUser($token){

        $user = $this->users->activateUser($token);
        if ($user){
            return redirect('/')->with('msg','Successfuly activated account');
        }
        else return redirect('/')->with('msg_error','Account already activated');


    }

    public function logout(Request $request){
        if($request->session()->has("user")){
            $user = session()->get('user');
            $this->action->insertAction($user->id_user,'Odjava');
            $request->session()->forget("user");
        }
        return redirect("/")->with("msg","You have successfully logged out");
    }


    /////////////////////Contact Page////////////////////////
    public function contact(ContactValidation $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $coment = $request->input('coment');

        try{
            $to_name = 'Admin';
            $to_email = 'dzonzi97@gmail.com';
            $data = array('name'=>'Admin','userName'=>$username,'email'=>$email,'coment'=>$coment);

            Mail::send('emails.contact', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('Contact page');
                $message->from('nikola.nikolic.23.16@ict.edu.rs','Contact page');
            });
            return redirect("/")->with("msg","Successfull sent email");
        }
        catch (\Exception $exception){
            \Log::info($exception->getMessage());
        }

    }







}
