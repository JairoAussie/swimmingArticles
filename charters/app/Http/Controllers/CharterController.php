<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharterController extends Controller
{
    public function index(){
        $charters = DB::select( DB::raw("SELECT type_desc FROM charter_res_types "));
        //selectRaw('comments.post_id,  post.body as post ,profile.last_name,  profile.first_name' , comments.comments)->
//join('profile' , 'post.user_id' ,'=' , 'profile.user_id')->
//join('comments' , 'post.id' , '=' , 'comments.post_id')->
//get() ;
        return view('welcome',compact('charters'));
    }
}
