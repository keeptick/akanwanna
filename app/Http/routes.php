<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', "HomeController@getIndex");
Route::get('/login', "HomeController@getLogin");
Route::get('/login/register', "HomeController@getLogReg");
Route::get('/contact', "HomeController@getContact");
Route::get('/officers', "HomeController@getOfficers");

Route::get('/register', "HomeController@getRegister");
Route::post("register",array("as"=>"register","uses"=>"RegistrationController@postRegistration"));
Route::get('/success', "RegistrationController@getSuccess");
Route::get('/bankpay/{id?}/{ref?}', "RegistrationController@getBankPay");
Route::post('/bankpay', "RegistrationController@postBankPay");

Route::get('/contact', "HomeController@getContact");
Route::post('/contact', ['as' => 'contact_store', 'uses' => 'HomeController@postContact']);
Route::get('/officers', "HomeController@getOfficers");
Route::get('/gallery', "HomeController@getGallery");
Route::get("/pages/{permalink?}",["as"=>"pageslink","uses"=>"HomeController@getPages"]);
//Route::get("/pages/about-us",["as"=>"pageslink","uses"=>"HomeController@getAboutUs"]);
Route::get('posts/',array('as'=>'post','uses'=>'HomeController@getPosts'));
Route::get('posts/{permalink?}',array('as'=>'pages','uses'=>'HomeController@getPages'));
Route::Post('pages/{permalink}',array('as'=>'pages','uses'=>'HomeController@postPages'));


Route::group(array('prefix' => 'backend'), function() {
    Route::get("/",["as"=>"Dashboard","uses"=>"Backend\HomeController@getDashboard"]);
    Route::get("dashboard",["as"=>"Dashboard","uses"=>"Backend\HomeController@getDashboard"]);
    Route::get("pages/index",["as"=>"pageslisting","uses"=>"Backend\PagesController@getIndex"]);
    Route::get("pages/index",["as"=>"pageslisting","uses"=>"Backend\PagesController@getIndex"]);
    Route::get("pages/addnew",['as'=>'addnewpage',"uses"=>"Backend\PagesController@getAddNew"]);
    Route::post("pages/addnew",["uses"=>"Backend\PagesController@postAddNew"]);
    Route::get("pages/edit/{id?}",["as"=>"editpage","uses"=>"Backend\PagesController@getEditPage"]);
    Route::post("pages/edit/{id?}",["uses"=>"Backend\PagesController@postEditPage"]); //Used for all kinds of post table delete

    Route::get("members/index",array("as"=>"members","before"=>"auth","uses"=>"Backend\MembersController@getIndex"));
    Route::get("members/edit/{id?}",array("as"=>"memberedit","before"=>"auth","uses"=>"Backend\MembersController@getEdit"));
    Route::post("members/edit/{id?}",array("as"=>"membereditp","before"=>"auth","uses"=>"Backend\MembersController@postEdit"));
    Route::get("members/addnew",array("as"=>"memberaddnew","before"=>"auth","uses"=>"Backend\MembersController@getAddNew"));
    Route::post("members/addnew",array("as"=>"memberaddp","before"=>"auth","uses"=>"Backend\MembersController@postAddNew"));
    Route::get("members/details/{id}", array("as"=>"memberdetails","before"=>"auth","uses"=>"Backend\MembersController@getDetails"));
    Route::post("members/details/{id}",array("as"=>"membershipdetailspost","before"=>"auth","uses"=>"Backend\MembersController@postDetails"));


    /**
     * Route for post
     */

    Route::get("posts/index",["as"=>"postslisting","uses"=>"Backend\PostsController@getIndex"]);
    Route::get("posts/addnew/{type?}",['as'=>'addnewpost',"uses"=>"Backend\PostsController@getAddNew"]);
    Route::get("posts/edit/{id?}",["as"=>"editpost","uses"=>"Backend\PostsController@getEditPost"]);
    Route::post("posts/addnew/{type?}",["uses"=>"Backend\PostsController@postAddNew"]);
    Route::post("posts/edit/{type?}",["uses"=>"Backend\PostsController@postEditPost"]);
    Route::get("posts/categories",["uses"=>"Backend\PostsController@getPostCategoryList"]);
    Route::post("posts/categories",['uses'=>"Backend\PostsController@postPostCategory"]);

    /**
     * Route for Event
     */

    Route::get("events/index",["as"=>"eventlisting","uses"=>"Backend\EventsController@getIndex"]);
    Route::get('events/addnew', array('as'=>'addnewevent','uses'=>'Backend\EventsController@getAddNew'));
    Route::get("events/edit/{id?}",["as"=>"editevent","uses"=>"Backend\EventsController@getEditEvent"]);
    Route::post('events/addnew', array('uses'=>'Backend\EventsController@postAddNew'));
    Route::post("events/edit/{id?}",["uses"=>"Backend\EventsController@postAddNew"]);
    Route::get("events/categories",["uses"=>"Backend\EventsController@getEventCategoryList"]);
    Route::post("events/categories",['uses'=>"Backend\EventsController@postEventCategory"]);
    /**
     * Route for officers
     */
    Route::get("officers/",["as"=>"officerslist","uses"=>"Backend\OfficersController@getIndex"]);
    Route::get("officers/index",["as"=>"officerslist","uses"=>"Backend\OfficersController@getIndex"]);
    Route::get("officers/addnew/{new?}",["as"=>"addofficer","uses"=>"Backend\OfficersController@getAddNew"]);

    /**
     * Route for menu
     */
    Route::get("menu/index/{id?}",array("as"=>"menuhome","uses"=>"Backend\MenuController@getIndex"));
    Route::post("menu/index",array("as"=>"index","uses"=>'Backend\MenuController@postMenuHome'));

    /**
     * Route for sliders
     */

    Route::get("sliders/index/{id?}",["as"=>"sliderhome","uses"=>"Backend\SlidersController@index"]);
    Route::post("sliders/index/{id?}",["uses"=>"Backend\SlidersController@postIndex"]);
});