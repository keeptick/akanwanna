<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    //
    public function getIndex(){
        return View("backend.members.index",["members"=>\DB::table("members")->where("view","visible")->orderBy("created_at","DESC")->paginate(10),"page_title"=>"List"]);
    }

    public function getEdit($id){
        return View("backend/members/edit")->with("member",\Member::find($id))->with("countries",\DB::table("country")->get());
    }

    public function getAddNew(){
        return View("backend/members/addnew",["countries"=>\DB::table("country")->get(),"page_title"=>"Add New Member"]);
    }

    public function postEdit(){
        $input = \Input::all();
        $validation = \Member::validate($input);

        array_forget($input,"created_by");
        array_forget($input,"_token");
        array_forget($input,"type");
        array_forget($input,"company_address");
        $member =\Member::find($input['id']);
        foreach($input as $key=>$value){
            $member->$key = $value;
        }

        if($member->update()){
            /*\Mail::send('emails.registration', $input, function($message)  use($input)
            {
                $message->to($input['email'], $input['first_name'])->cc("solaolateju@yahoo.com","Shola")->subject('Welcome!');
            });*/
            return  Redirect::back()->with("success_message","Record Updated")->with("member",$member);
        }else{
            return  Redirect::back()->with("error_message","Record could not be updated")->with("member",$member);
        }
    }

    public function postAddNew(){
        $input = \Input::all();
        $validation = \Member::validate($input);
        if($validation->fails()){
            return Redirect::back()->withErrors($validation)->withInput();
        }else{
            $member = new Member();
            array_forget($input,"created_by");
            array_forget($input,"_token");
            array_forget($input,"type");
            array_forget($input,"company_address");

            foreach($input as $key=>$value){
                $member->$key = $value;
            }

            if($member->update()){
                \Mail::send('emails.registration', $input, function($message)  use($input)
                {
                    $message->to($input['email'], $input['first_name'])->cc("membershipdept@nitad.org","Membership")->subject('Welcome!');
                });
                return  Redirect::back()->with("success_message","Record Updated")->with("member",$member);
            }else{
                return  Redirect::back()->with("error_message","Record could not be updated")->with("member",$member);
            }
        }
    }


    public function getDetails($id){
        return View::make("backend/members/details")
            ->with("me",\Member::find($id))
            ->with("enrolments",\Member::find($id)->enrolments()->orderBy("created_at","DESC")->get()) // Get Enrolment programs related to member
            ->with("attendeds",\Member::find($id)->enrolments()->where("type","<>","membership")->orderBy("created_at","DESC")->get())
            ->with("memberships",\Membership::all())
            ->with("payments",\Member::find($id)->payments()->orderBy("created_at","DESC")->get());

    }

    public function postDetails($id){
        $input = Input::all();
        if(Request::ajax()){
            $member = \Member::find($id);
            $membership = \Membership::find($input['membership_id']);
            $member->membership_id = $membership->id;
            $member->membership_title = $membership->title;
            if($member->update()){
                Session::flash("success_message","Membership info for member has been updated successfully");
                return Response::json( array("data"=>$member,"status"=>200,"msg"=>"Membership info for member has been updated successfully"));
            }else{
                Session::flash("error_message","Membership info for member has been updated successfully");
                return Response::json( array("data"=>$member,"status"=>400,"msg"=>"Unexpected Error! Membership info for member could not be updated"));
            }
            exit;
        }


        $enrolment = \Enrolment::find($id);
        if($enrolment){
            if(strtolower($enrolment->type) == "membership"){
                //GEt the member with the request
                $mem = \Member::find($enrolment->member_id);
                //Get the membership requested for
                $memship = DB::table("memberships")->where("id",$enrolment->membership_id)->first();

                $mem->membership_id = $memship->id;
                $mem->membership_title = $memship->title;
                $mem->updated_at = date("Y-m-d H:i:s");
                $mem->update();

            }

            $enrolment->status = $input['status'];
            if($enrolment->update()){
                echo "Updated Successfully";
            }else{
                echo "Unexpected Error";
            }
        }

    }

    public function getNewMembershipList(){
        return View::make("backend/notifications/membership")->with("memberships",\Member::where("verified","=",0)->orderBy("created_at","DESC")->paginate(20));
    }

    public function postNewMembership($id){
        $input = Input::all();
        $member = \Member::find($id);
        $member->verified = 1;
        $input['email'] = $member->email;
        $input['first_name'] =$member->first_name;
        if($member->update()){
            \Mail::send('emails.regverified', $input, function($message)  use($input)
            {
                $message->to($input['email'], $input['first_name'])->cc("membershipdept@nitad.org","Membership")->subject('Welcome!');
            });
            echo "Membership Status changed successfully";
        }
    }
}
