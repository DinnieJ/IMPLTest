<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Request as UserRequest;
class RequestController extends Controller
{
    public function goToRequest(){
        if(!Auth::check()){
            return redirect()->to('/login');
        }else{
            $user = DB::table('Users')->where('email',Auth::user()->email)->get();
            if($user[0]->request_status != 0){
                return redirect()->to('/viewrequest');
            }
            return view('pages.request');
        }
    }
    public function createRequest(Request $req){
        $this->validate($req,[
            'reason'=>'required'
        ]);
        $request = new UserRequest();
        $request->email = Auth::user()->email;
        $request->reason = $req->get('reason');
        $request->status = 0;
        $request->save();
        DB::table('Users')->where('email',Auth::user()->email)->update(['request_status'=> 1]);
        return redirect()->to('/request');
    }
    public function newRequest(){
        DB::table('Users')->where('email',Auth::user()->email)->update(['request_status'=> 0]);
        return redirect()->to('/request');
    }
}
