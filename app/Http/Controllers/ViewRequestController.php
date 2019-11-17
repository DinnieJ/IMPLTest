<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class ViewRequestController extends Controller
{
    public function showRequestStatus(){
        if(!Auth::check()){
            return redirect()->to('/login');
        }else{
            $status = DB::table('Users')->where('email',Auth::user()->email)->pluck('request_status');
            $rel_status = $status[0];
            return view('pages.status')->with('status',$rel_status);
        }
    }
}
