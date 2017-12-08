<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function getDashboard(){
        return View("backend.dashboard",["page_title"=>"Dashboard"]);
    }
}
