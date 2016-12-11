@extends("layouts.default")
@section("content")
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Pages</a></li>
            <li class="active">Login</li>
        </ul>
    </div><!--/container-->
</div>
<div class="container content-md">
    <div class="margin-bottom-60 head">
        <h1>Login or Register an Account</h1>
        <p>Lorem ipsum dolor sit amet, contetur adipisicing elit, sed do eiusmod tempor incididunt labore. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
    </div>

    <div class="row space-xlg-hor equal-height-columns">
        <!--login Block-->
        <div class="form-block login-block col-md-6 col-sm-12 rounded-left equal-height-column" style="height: 606px;">
            <div class="form-block-header">
                <h2 class="margin-bottom-15">Sign In</h2>
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon rounded-left"><i class="icon-user color-white"></i></span>
                <input type="text" class="form-control rounded-right" placeholder="Username">
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon rounded-left"><i class="icon-lock color-white"></i></span>
                <input type="password" class="form-control rounded-right" placeholder="Password">
            </div>

            <div class="row margin-bottom-70">
                <div class="col-md-12">
                    <button type="submit" class="btn-u btn-block rounded">Sign In</button>
                </div>
            </div>
            <div class="social-login">
                <div class="or rounded-x">Or</div>
                <ul class="list-unstyled">
                    <li>
                        <button class="btn rounded btn-block btn-lg btn-facebook-inversed margin-bottom-20">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </button>
                    </li>
                    <li>
                        <button class="btn rounded btn-block btn-lg btn-twitter-inversed">
                            <i class="fa fa-twitter"></i> Sign in with Twitter
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!--End login Block-->

        <!--Reg Block-->
        <div class="form-block reg-block col-md-6 col-sm-12 rounded-right equal-height-column" style="height: 606px;">
            <div class="form-block-header">
                <h2 class="margin-bottom-10">Sign Up</h2>
                <p class="margin-bottom-20">Lorem ipsum dolor sit amet, conur sicing elit, seddoet dolore magna. aliqua.</p>
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon rounded-left"><i class="icon-pencil"></i></span>
                <input type="text" class="form-control rounded-right" placeholder="Your name">
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon rounded-left"><i class="icon-user"></i></span>
                <input type="text" class="form-control rounded-right" placeholder="Username">
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon rounded-left"><i class="icon-envelope"></i></span>
                <input type="email" class="form-control rounded-right" placeholder="Your email">
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon rounded-left"><i class="icon-lock"></i></span>
                <input type="password" class="form-control rounded-right" placeholder="Password">
            </div>

            <div class="checkbox margin-bottom-15">
                <label>
                    <input type="checkbox">
                    <p>I agree to terms &amp; conditions</p>
                </label>

                <label>
                    <input type="checkbox">
                    <p>Subscribe to our newsletter</p>
                </label>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn-u btn-block rounded">Continue</button>
                </div>
            </div>
        </div>
        <!--End Reg Block-->
    </div>
</div>

@stop