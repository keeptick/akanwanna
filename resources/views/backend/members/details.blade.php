<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/18/16
 * Time: 8:30 PM
 */ ?>




<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/18/16
 * Time: 8:29 PM
 */ ?>

<?php
//initilize the page
require_once("inc/init.php");
//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");
/*---------------- PHP Custom Scripts ---------
YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $member_last_name = "Custom last_name" */
$member_last_name = "Members";
/* ---------------- END PHP Custom Scripts ------------- */
//include header
//you can add your custom css in $member_css array.
//Note: all css files are inside css/ folder
$member_css[] = "your_style.css";
include("inc/header.php");
//include left panel (navigation)
//follow the tree in inc/config.ui.php
$member_nav["pages"]["sub"]["list"]["active"] = false;
include("inc/nav.php");
$breadcrumbs["pages"] =""
?>
<script src="../../js/app.config.js"></script>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
<?php
//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
//$breadcrumbs["New Crumb"] => "http://url.com"
//$breadcrumbs["Pages"] = "";
include("inc/ribbon.php");
?>
<?php $user = \Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
<!-- MAIN CONTENT -->
<div id="content">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-last_name txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Member <span>> Portal</span></h1>
        </div>
        <p>&nbsp;&nbsp;</p>
    </div>
    <!-- widget grid -->

        <!-- row -->
        <div class="row">

        <div class="col-sm-12">


        <div class="well well-sm">

        <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="well well-light well-sm no-margin no-padding">
        <div class="row">
            <div class="col-sm-12">

                <div class="row">

                    <div class="col-sm-3 profile-pic">
                        <img src="<?php echo ASSETS_URL; ?>/img/ahmed.png">
                        <div class="padding-10">
                            <h4 class="font-md"><strong>1,543</strong>
                                <br>
                                <small>Events</small></h4>
                            <br>
                            <h4 class="font-md"><strong>419</strong>
                                <br>
                                <small>Trainings</small></h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h1>{{$me->first_name}} <span class="semi-bold">{{$me->last_name}}</span>
                            <br>
                            <small>{{$me->membership_title}}</small></h1>

                        <ul class="list-unstyled">
                            <li>
                                <p class="text-muted">
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp; <span class="txt-color-darken">{{$me->phone}}</span>
                                </p>
                            </li>
                            <li>
                                <p class="text-muted">
                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:{{$me->email}}">{{$me->email}}</a>
                                </p>
                            </li>


                        </ul>
                        <br>

                        <a href="mailto:{{$me->email}}" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
                        <br>
                        <br>

                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-xs txt-color-white bg-color-pinkDark pull-right">
                            Edit Profile
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- end row -->

        </div>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">

            <div class="well well-light well-sm ">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="row">

                            <div class="col-sm-6">

                                <h1>Work/Company Info <span class="semi-bold"></span>
                                    <br>
                                    <small>{{$me->company}}</small></h1>

                                <ul class="list-unstyled">
                                    <li>
                                        <p class="text-muted">
                                            <i class="fa fa-user"></i>&nbsp;&nbsp; <span class="txt-color-darken">{{$me->name_of_reporting_staff}} <i class="fa fa-asterisk"></i> Staff To Contact </span>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="">
                                            <i class="fa fa-phone"></i>&nbsp;&nbsp; <span>{{$me->phone_of_reporting_staff}} <i class="fa fa-asterisk"></i> Phone Number </span>
                                        </p>
                                    </li>


                                </ul>
                                <br>

                                <a href="javascript:void(0)" class="btn btn-danger btn-sm"> Request Upgrade</a>
                                <br>
                                <br>

                            </div>
                            <div class="col-sm-3">

                                <a type="submit" class="btn btn-xs txt-color-white bg-color-teal pull-right">
                                    Update Info
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- end row -->

            </div>


        </div>
        </div>

        </div>


        </div>

        <!-- end row -->

    <!-- end widget grid -->
</div>




    <div class="row">

        <div class="col-sm-12">

            <hr>

            <div class="padding-10">

                <ul class="nav nav-tabs tabs-pull-right">
                    <li class="active">
                        <a href="#a1" data-toggle="tab">Notifications/Request</a>
                    </li>
                    <li>
                        <a href="#a2" data-toggle="tab">Payments</a>
                    </li>
                    <li>
                        <a href="#a3" data-toggle="tab">Training Events &amp; Conferences</a>
                    </li>
                    <li class="pull-left">
                        <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i> Activity</span>
                    </li>
                </ul>

                <div class="tab-content padding-top-10">
                    <div class="tab-pane fade in active" id="a1">

                        <div class="row">



                        </div>

                    </div>
                    <div class="tab-pane fade" id="a2">

                       No Activity yet
                    </div><!-- end tab -->
                    <div class="tab-pane fade" id="a3">

                        No Activity yet
                    </div><!-- end tab -->
                </div>

            </div>

        </div>

    </div>
<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
// include page footer
include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->
<?php
//include required scripts
include("inc/scripts.php");
\Session::flush()
?>
<script>

    $(document).ready(function() {

    })
</script>
