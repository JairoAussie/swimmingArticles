<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ArticlesController extends Controller
{
    public function index(){
        $articles = App\Article::all();
        return view('welcome',compact('articles'));
    }
}
