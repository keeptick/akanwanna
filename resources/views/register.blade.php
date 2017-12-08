<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");
?>

@extends("layouts.default")
@section("content")
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Registration</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Register</li>
        </ul>
    </div><!--/container-->
</div>
<div class="container content">
<div class="row">
        <div class="col-6">

            @if(Session::has('error_message'))
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-check"></i>{{Session::get('error_message')}}
            </div>
            @endif
            @if(Session::has('success_message'))
            <div class="alert alert-success fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-check"></i>{{Session::get('success_message')}}
            </div>
            @endif

            @if ( ! empty( $errors ) )
            @foreach ( $errors->all() as $error )
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-times"></i>{{$error}}

            </div>

            @endforeach
            @endif
        </div>
    </div>

<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">

    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="reg-page sky-form">
                <div class="reg-header">
                    <h2>Register a new account</h2>
                    <p>Already Signed Up? Click <a href="{{url('')}}/login" class="color-green">Sign In</a> to login your account.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>First Name</label>
                        <input type="text" class="form-control margin-bottom-20" name="first_name">
                    </div>
                    <div class="col-sm-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control margin-bottom-20" name="last_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Other Name</label>
                        <input type="text" class="form-control margin-bottom-20" name="other_name">
                    </div>
                    <div class="col-sm-6">
                        <label>Email Address <span class="color-red">*</span></label>
                        <input type="text" class="form-control margin-bottom-20" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Phone</label>
                        <input type="text" class="form-control margin-bottom-20" name="phone">
                    </div>
                    <div class="col-sm-6">
                        <label>Date of Birth <span class="color-red">*</span></label>
                        <input type="text" class="form-control margin-bottom-20" name="dob">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Title of Position <span class="color-red">*</span></label>
                        <section>
                            <label class="select">
                                <select name="position_title" class="valid">
                                    <option value="0" selected="" disabled="">Title of Position</option>
                                    <option value="1">Leading post</option>
                                    <option value="2">Youth Wing</option>
                                    <option value="3">Womens' Wing</option>
									<option value="4">Admin Secretaries-(Uder Secretary)</option>
									<option value="5">Matrons</option>
									<option value="5">Membership Mobilization Committee</option>
									<option value="5">Conflit Resolution Committee</option>
									<option value="5">Tactical Committee</option>
									<option value="5">Board of Trustees-BOT</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <label>Position</label>
                        <section>
                            <label class="select state-success">
                                <select name="position" class="valid">
                                    <option value="0" selected="" disabled="">Position</option>
                                    <option value="1">President</option>
                                    <option value="2">Deputy President</option>
                                    <option value="3">Vice President, Welfare/Economic Dev./Co-operative society</option>
									<option value="4">Vice President, Evangelism/Manpower Dev. / Education</option>
                                    <option value="5">Secretary General</option>
                                    <option value="6">Asst. Secretary General</option>
									<option value="7">Treasurer</option>
                                    <option value="8">Financial Secretary</option>
                                    <option value="9">Asst. Financial Secretary</option>
									<option value="10">Director Information & Communication</option>
                                    <option value="11">Asst. Information & communication</option>
                                    <option value="12">Secretary, Information & communication</option>
									<option value="13">Director, Music & Socials</option>
                                    <option value="14">Asst. Director, Music & Socials</option>
                                    <option value="15">Provost</option>
									<option value="16">National Auditor</option>
                                    <option value="17">Legal Adviser</option>
                                    <option value="18">Leader, Youth Wing</option>
									<option value="19">Asst. Leader Youth Wing</option>
									<option value="20">2nd Asst. Leader Youth Wing</option>
									<option value="21">Leader Women’s Wing</option>
									<option value="22">Asst. leader</option>
									<option value="23">Secretary</option>
									<option value="24">PRO</option>
									<option value="25">Project officer</option>
									<option value="26">2nd Asst. Leader</option>
									<option value="27">Strategic Planning/Int’l Affiliations/Multi-lateral collaborations</option>
									<option value="28">Welfare/ Economic Dev./ Co-operative Society</option>
									<option value="29">Evangelism / Man power Dev. /Education</option>
									<option value="30">Chairman</option>
									<option value="31">Vice Chairman</option>
									
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Gender <span class="color-red">*</span></label>
                        <section>
                            <label class="select">
                                <select name="gender" class="valid">
                                    <option value="0" selected="" disabled="">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <label>Nationality <span class="color-red">*</span></label>
                        <section>
                            <label class="select state-success">
                                <select name="nationality" class="valid">
                                    <option value="0" selected="" disabled="">Nationality</option>
                                    <option value="1">Nigerian</option>
                                    <option value="3">Other</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label>Password <span class="color-red">*</span></label>
                        <input type="password" class="form-control margin-bottom-20" name="password">
                    </div>
                    <div class="col-sm-6">
                        <label>Confirm Password <span class="color-red">*</span></label>
                        <input type="password" class="form-control margin-bottom-20" name="confirm-password">
                    </div>
                </div>
                <div class="row">
                    <section>
                        <label class="label">Address</label>
                        <label class="textarea">
                            <i class="icon-append fa  fa-sticky-note"></i>
                            <textarea rows="3" placeholder="Enter Address" name="address"></textarea>
                        </label>
                    </section>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>City</label>
                        <input type="text" class="form-control margin-bottom-20" name="city">
                    </div>
                    <div class="col-sm-6">
                        <label>State<span class="color-red">*</span></label>
                        <input type="text" class="form-control margin-bottom-20" name="state">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-lg-6 checkbox">
                        <label>
                            <input type="checkbox">
                            I read <a href="page_terms.html" class="color-green">Terms and Conditions</a>
                        </label>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop