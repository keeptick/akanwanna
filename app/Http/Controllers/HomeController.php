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

   public function getPages($pagelink){

        $sliders  = \DB::table("posts")->where("type","slideshow")->where("status","published")->get();
        $page = new Post();
        $mission = Post::where("permalink","our-mission")->first();
        $vision =Post::where("permalink","our-vission")->first();
        $goal = Post::where("permalink","our-goal")->first();
        $aboutus = Post::where("permalink","=","about-us")->first();
        try{
            $page = Post::where('permalink', '=', $pagelink)->where("status","published")->first();
        }catch(Exception $e){
            Redirect::to('404')->with('title',"Page not found");
        }
        if(count($page)==1){
            if(strtolower($page->permalink) == "contact" || strtolower($page->permalink) == "contact-us"){
                return View('pages.contact-us',["aboutus"=>$aboutus,'title'=>"Page not found","recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()]);
                exit;
            }
            if(strtolower($page->permalink) == "about-us" || strtolower($page->permalink) == "about"){
                return View('pages.about-us',["aboutus"=>$aboutus,"mission"=>$mission,"vision"=>$vision,"goal"=>$goal,'title'=>$page->title,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get(),"page"=>Post::where("permalink",$pagelink)->first()])->with("caption",$page->caption)->with("socials",DB::table('socials')->get())->with("settings",DB::table('settings')->first());;
                exit;
            }
            if(strtolower($page->permalink) == "membership" || strtolower($page->permalink) == "membership"){
                return View('register',["aboutus"=>$aboutus,"mission"=>$mission,"vision"=>$vision,"goal"=>$goal,'title'=>$page->title,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()])->with("caption",$page->caption)->with("socials",DB::table('socials')->get())->with("settings",DB::table('settings')->first());;
                exit;
            }
            if($page->permalink =="gallery"){
                return View::make('gallery',["aboutus"=> $aboutus,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()])->with('page',$page)->with('title',$page->title)->with("caption",$page->caption)->with("settings",DB::table('settings')->first())
                    ->with("socials",DB::table('socials')->get())->with("settings",DB::table('settings')->first());
                exit;
            }
            if($page->type=="post"){

                return View::make('posts.post',["aboutus"=> $aboutus,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()])->with('page',$page)->with('title',$page->title)->with("caption",$page->caption)->with("settings",DB::table('settings')->first())
                    ->with("socials",DB::table('socials')->get())->with("settings",DB::table('settings')->first());


            }elseif($page->type=="page"){
                $aboutus = Post::where("permalink","=","about-us")->first();
                return View::make('pages.page',["aboutus"=> $aboutus,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()])->with('page',$page)->with('title',$page->title)->with("caption",$page->caption)->with('title',$page->title)->with("settings",DB::table('settings')->first())
                    ->with("socials",DB::table('socials')->get())->with("settings",DB::table('settings')->first())
                    ->with("socials",DB::table('socials')->get())
                    ->with("slideshows",$sliders);

            }elseif($page->type == "post category"){
                $categories  = DB::table("posts")->where("parent_id",$page->id)->with('title',$page->title)->with("caption",$page->caption)->where("status","published")->paginate(20);
                return View::make("posts.category",["aboutus"=>$aboutus,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()])->with('page',$page)->with("settings",DB::table('settings')->first())
                    ->with("socials",DB::table('socials')->get())->with('title',$page->title)->with("categories",$categories);
            }

        }else{
            return Redirect::to('404',["aboutus"=>$aboutus,"recentposts"=> Post::where("post_type","post")->orderBy("created_at","DESC")->take(5)->get()])->with("settings",DB::table('settings')->first())
                ->with("socials",DB::table('socials')->get())->with('title',"Page not found");
        }

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
