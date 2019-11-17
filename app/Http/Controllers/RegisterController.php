<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use App\User;
use Illuminate\Database\Eloquent\Builder;
class RegisterController extends Controller
{
    public function showRegister(){
        return view('pages.register');
    }

    public function doRegister(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'retypepassword' => 'required'
        ]);
        
        if($req->get('password') != $req->get('retypepassword')){
            return back()->with('error','Password mismatch!');
        }
        if(User::where('email','=',$req->get('email'))->first()){
            return back()->with('error','User existed !');
        }
        $user = new User();
        $user->name = $req->get('name');
        $user->email = $req->get('email');
        $user->password = Hash::make($req->get('password'));
        $user->role = 'BUYER';
        $user->request_status = 0;
        $user->save();
        auth()->login($user);
        return redirect()->to('/home');
    }
}
