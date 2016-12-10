<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;



class HomeController extends Controller{
    //
	public function getIndex()
   {
		return view('home');
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
