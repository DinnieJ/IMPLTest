<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    public function showLogin(){
        if(Auth::check()){
            Auth::logout();
        }
        return view('pages.login');
    }

    public function doLogin(Request $req){
        $this->validate($req,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user_data = array(
            'email'  => $req->get('email'),
            'password' => $req->get('password')
        );
        //$user_from_db = DB::table('Users')->where('email',$user_data['email'])->get();
        //dd($user_from_db[0]->password);
        //$check = Hash::check($user_data['password'],$user_from_db[0]->password);
        //dd($check);
        if(Auth::attempt($user_data)){
            return redirect('/home');
        }else{
            return back()->with('error','Wrong username or password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('/login');
    }

}
