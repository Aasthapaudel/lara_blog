<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class HomeController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
        {

            $post=POST::all();

            $usertype=Auth()->user()->usertype;


            if($usertype=='user')
            {
                return view('home.home',compact('post'));

            }
            else if($usertype=='admin')
            {
                return view ('admin.adminhome');
            }
            else{
                return redirect()->back();
            }

        }
    }
    public function homepage() {
        $post =POST::all();
        return view('home.home',compact('post'));

    }



    public function post()
    {
        return view("post");
    }
}
