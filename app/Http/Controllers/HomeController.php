<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    public function goHome(){
        if(!Auth::check()){
            return redirect()->to('/login');
        }else{
            $user = DB::table('Users')->where('email',Auth::user()->email)->get();
            return view('pages.home')->with('user',$user);
        }
    }
}
