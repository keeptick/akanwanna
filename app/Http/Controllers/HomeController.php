<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;



class HomeController extends Controller{
    //
	public function getIndex()
   {
		$mission = Post::where("permalink","our-mission")->first();
        $vission =Post::where("permalink","our-vission")->first();
        $goal = Post::where("permalink","our-goal")->first();
        $aboutus = Post::where("permalink","=","about-us")->first();
        return view('home',["aboutus"=>$aboutus,"settings" => DB::table('settings')->first(),"socials" => DB::table('socials')->get(),
            "mission"=>$mission,"vission"=>$vission,"goal"=>$goal,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()
        ,"myevents"=>DB::table("posts")->where("type","event")->orderBy("created_at","DESC")->paginate(4)]);
   }
    public function getLogin()
    {
        return view('login');
    }
    public function getRegister()
    {
        return view('register');
    }
    public function getLogReg()
    {
        return view('loginreg');
    }
    public function getContact()
    {
        return view('contact');
    }
    public function getOfficers()
    {
        return view('officers');
    }
}
