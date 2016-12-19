<?php

namespace App\Http\Controllers\Backend;

use App\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class OfficersController extends Controller
{
    //
    public function getIndex(){
        $officers = DB::table('officers')->get();
        return view("backend.officers.index", ["officers" => $officers],["page_title"=>"Officers Listing","title"=>"Officers"]);
    }

    public function getAddNew(){
        return View("backend.officers.addnew",["page_title"=>"Officers Listing","title"=>"Officers"] );
    }

    public function officerAddNew(Request $request){
        $input = $request->all();

        if($request->ajax())
        {

        }
        $validation = Officer::validate($input);
        $officer = new Officer();
        if($validation -> fails()){
            Session::flash("error_message","Request not sent, Please fill the required fields(*)");
            return \Redirect::to("backend/officers/addnew/new")->withErrors($validation)->withInput();
        }
        else{
            $officer->firstname       = $input['firstname'];
            $officer->lastname        = $input['lastname'];
            $officer->othername       = $input['othername'];
            $officer->email           = $input['email'];
            $officer->phone           = $input['phone'];
           // $officer->image           = $input['image'];
            $officer->department      = $input['department'];
            $officer->position        = $input['position'];
            $officer->position        = $input['position'];
            //$officer->created_at      = new DateTime();

            if($officer->save()){
                Session::flash("success_message","Officer has been successfully added");
                return \Redirect::to("/");
            }else{
                Session::flash("error_message","Couldn't Add an officer");
                echo "Unexpected Error! Your order was not submitted";
                return \Redirect::to("home")->with("Your request is being processed! Thanks for the Order")->with("input", $input);
                return \Redirect::back()->withErrors($validation)->withInput();
            }
        }

    }

}

