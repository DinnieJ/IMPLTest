<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RequestHandlerController extends Controller
{
    public function showAllRequest(){
        $all_request = DB::table('Requests')->get();
        //dd($all_request);
        return view('pages.requesthandler')->with('allrequest',$all_request);
    }

    public function acceptRequest(Request $req){
        $id = $req->get('id');
        $email = $req->get('email');
        DB::table('Requests')->where('id',$id)->update(['status'=> 1]); //accept status = 1
        DB::table('Users')->where('email',$email)->update(['request_status'=> 2,'role'=>'SELLER']);
        return back();
    }

    public function rejectRequest(Request $req){
        $id = $req->get('id');
        $email = $req->get('email');
        DB::table('Requests')->where('id',$id)->update(['status'=> 2]); //reject status = 2
        DB::table('Users')->where('email',$email)->update(['request_status'=> 3]);
        return back();
    }
}
