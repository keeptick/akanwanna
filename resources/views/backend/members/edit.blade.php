<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/18/16
 * Time: 8:29 PM
 */
//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Edit Page";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["pages"]["sub"]["addnew"]["active"] = true;
include("inc/nav.php");

?>
    <script src="../../js/app.config.js"></script>
    <script src="{{url()}}/js/plugin/jquery-validate/jquery.validate.min.js"></script>
    <!-- ==========================CONTENT STARTS HERE ========================== -->
    <!-- MAIN PANEL -->
    <div id="main" role="main">
    <?php
    //configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
    //$breadcrumbs["New Crumb"] => "http://url.com"
    $breadcrumbs["Pages"] = "";
    include("inc/ribbon.php");
    ?>

    <!-- MAIN CONTENT -->
    <div id="content">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Members <span>> Edit page</span></h1>

        </div>

    </div>
    <section>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <div class="text-left">
                {{HTML::decode(HTML::linkRoute('members','<span class="btn-label"><i class="glyphicon glyphicon-back"></i> Back to Listing'))}}
            </div>
        </div>
    </section>
    {{Form::open(array('action'=>array('Backend\MemberController@postEdit', $member->id), 'method'=>'POST', 'id'=>'wizard-1', 'class'=>'form-horizontal', 'files'=>true)) }}
    <div class="row">

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
    <div class="col-sm-9">
        <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" role="widget" style="">
            <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus"></i></a>  </div>
                <span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
                <h2 class="font-md"><strong>Supply Member </strong> <i>Details</i></h2>

                <!--<span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span>-->
            </header>

            <!-- widget div-->

            <div role="content" style="display: block;">

                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->

                </div>
                <!-- end widget edit box -->

                <!-- widget content -->
                <div class="widget-body">

                    <fieldset>
                        <legend></legend>

                    </fieldset>

                    <input type="hidden" id="created_by" name="created_by">
                    <input type="hidden" id="id" name="id" value="{{$member->id}}">
                    <input type="hidden" id="type" name="type" value="individual">

                </div>
                <!-- end widget content -->

                <!-- widget content -->
                <div class="widget-body ">

                    <div class="row">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <div class="row">

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">First Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="first_name" autocomplete="off" name="first_name" placeholder=" " value="{{$member->first_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Last Name</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="last_name" autocomplete="off" name="last_name" placeholder=" " value="{{$member->last_name}}">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Other Name</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="other_name" autocomplete="off" name="other_name" placeholder=" " value="{{$member->other_name}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Date of Birth</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="dob" autocomplete="off" name="dob" placeholder=" " value="{{$member->dob}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="email" autocomplete="off" name="email" placeholder=" " value="{{$member->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mobile</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="phone" autocomplete="off" name="phone" placeholder=" " value="{{$member->phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Address</label>
                                    <div class="col-lg-6">
                                        <textarea name="address" id="address" class="form-control" autocomplete="off" cols="30" rows="5">{{$member->address}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">City</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="city" name="city" autocomplete="off" value="{{$member->city}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">State</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="state" autocomplete="off" name="state" placeholder=" " value="{{$member->state}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Country</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="country" autocomplete="off" name="country" placeholder=" " value="{{$member->country}}">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <!-- end widget content -->

                <div class="widget-body">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 col-md-12">


                            <div class="form-group">
                                <label class="col-lg-2 control-label">Occupation</label>
                                <div class="col-lg-6">
                                    <select name="occupation" autocomplete="off" class="form-control ">

                                        <option value="" >Select Occupation</option>
                                        @if($member->occupation)
                                        <option value="{{$member->occupation}}" selected>{{$member->occupation}}</option>
                                        @endif
                                        <option value="Accounting / Audit / Tax">Accounting / Audit / Tax</option>
                                        <option value="Administration &amp; Office Support">Administration &amp; Office Support</option>
                                        <option value="Banking / Finance / Insurance">Banking / Finance / Insurance</option>
                                        <option value="Building Design/Architecture">Building Design/Architecture</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Consulting/Business Strategy &amp; Planning">Consulting/Business Strategy &amp; Planning</option>
                                        <option value="Creatives">Creatives</option>
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="Education/Teaching/Training">Education/Teaching/Training</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Executive / Top Management">Executive / Top Management</option>
                                        <option value="Healthcare / Pharmaceutical ">Healthcare / Pharmaceutical </option>
                                        <option value="Hospitality / Leisure / Travels">Hospitality / Leisure / Travels</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Legal">Legal</option>
                                        <option value="Logistics / Transportation">Logistics / Transportation</option>
                                        <option value="Manufacturing / Production">Manufacturing / Production</option>
                                        <option value="Marketing / Advertising / Communications">Marketing / Advertising / Communications</option>
                                        <option value="NGO/Community Services & Dev">NGO/Community Services &amp; Dev</option>
                                        <option value="Oil & Gas / Mining / Energy">Oil&amp;Gas / Mining / Energy</option>
                                        <option value="Project / Programme Management" >Project / Programme Management </option>
                                        <option value="QA&amp;QC / HSE" >QA&amp;QC / HSE</option>
                                        <option value="Real Estate / Property">Real Estate / Property</option>
                                        <option value="Research">Research</option>
                                        <option value="Sales/Business Development">Sales/Business Development</option>
                                        <option value="Supply Chain / Procurement">Supply Chain / Procurement</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Vocational Trade and Services" >Vocational Trade and Services</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Date of Employment</label>
                                <div class="col-lg-6">
                                    <input class="form-control  date" autocomplete="off" placeholder="Date of employment"  type="text" name="employment_date" value="{{$member->employment_date}}" id="employment_date">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-2 control-label">Company Name</label>
                                <div class="col-lg-6">
                                    <input class="form-control " autocomplete="off" placeholder="Company name" type="text" name="company" id="company" value="{{$member->company}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-2 control-label">Company Address</label>
                                <div class="col-lg-6">

                                    <textarea class="form-control textarea" placeholder="Company Address" type="text" name="company_address" id="company_address" >{{$member->company_address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Name of Staff To Report</label>
                                <div class="col-lg-6">
                                    <input class="form-control " autocomplete="off" placeholder="Name of staff to report to" type="text" name="name_of_reporting_staff" id="name_of_reporting_staff" value="{{$member->name_of_reporting_staff}}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Phone Number of Staff Above</label>
                                <div class="col-lg-6">
                                    <input class="form-control " autocomplete="off" placeholder="Phone number of staff to report to" type="text" name="phone_of_reporting_staff" id="phone_of_reporting_staff" value="{{$member->phone_of_reporting_staff}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- end widget div -->

        </div>

    </div>
    <div class="col-sm-3">

        <div class="jarviswidget jarviswidget-sortable" id="wid-id-12" data-widget-load="ajax/demowidget.php" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" role="widget">

            <header role="heading" class=""><div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);" class="button-icon jarviswidget-refresh-btn" data-loading-text="&nbsp;&nbsp;Loading...&nbsp;" rel="tooltip" title="" data-placement="bottom" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>     </div>
                <h2><strong>Save &amp;</strong> <i> Settings</i></h2>

                <span class="jarviswidget-loader" style="display: none;"><!--<i class="fa fa-refresh fa-spin"></i></span>--></header>

            <!-- widget div-->
            <div role="content" class="">

                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->

                </div>
                <!-- end widget edit box -->

                <!-- widget content -->
                <div class="widget-body">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group"><?php $user = \Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-cog"></i>
                                @if($user->is("Editor"))
                                {{"Save"}}
                                @elseif($user->is(array("CMS Manager","Administrator","Moderator")))
                                {{"Save &amp; Publish"}}
                                @endif
                                {{"Save &amp; Publish"}}

                            </button>
                            <!--<a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-cog"></i> Save &amp; Publish</a>-->

                        </div>
                        <hr>


                        <hr>
                    </div>

                </div>

                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>


    </div>
    </div>

    </form>
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
Session::flush()
?>

    <!-- PAGE RELATED PLUGIN(S)-->

    <script src="<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/ckeditor.js"></script>

    <script>


        $(document).ready(function() {
            CKEDITOR.replace( 'p_content',
                {
                    height: '380px', startupFocus : true,
                    filebrowserBrowseUrl :'<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserImageBrowseUrl : '<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector=<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserFlashBrowseUrl :'<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector=<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserUploadUrl  :'<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=File',
                    filebrowserImageUploadUrl : '<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
                    filebrowserFlashUploadUrl : '<?php echo ASSETS_URL; ?>/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
                }
            );
            //CKEDITOR.replace( 'p_content', { height: '380px', startupFocus : true} );
            var perma =""
            // PAGE RELATED SCRIPTS

            // switch style change
            $('input[name="checkbox-style"]').change(function() {
                //alert($(this).val())
                $this = $(this);

                if ($this.attr('value') === "switch-1") {
                    $("#switch-1").show();
                    $("#switch-2").hide();
                } else if ($this.attr('value') === "switch-2") {
                    $("#switch-1").hide();
                    $("#switch-2").show();
                }

            });

            // tab - pills toggle
            $('#show-tabs').click(function() {
                $this = $(this);
                if($this.prop('checked')){
                    $("#widget-tab-1").removeClass("nav-pills").addClass("nav-tabs");
                } else {
                    $("#widget-tab-1").removeClass("nav-tabs").addClass("nav-pills");
                }



                var $validator = $("#wizard-1").validate({
                    rules: {

                        email: {
                            required: true,
                            email: "Your email address must be in the format of name@domain.com"
                        },
                        first_name: {
                            required: true
                        },
                        last_name: {
                            required: true
                        },

                        occupation: {
                            required: true
                        },
                        employment_date: {required: true
                        },
                        phone_of_reporting_staff: {required: true
                        },
                        name_of_reporting_staff: { required :true
                        },
                        company:{required: true
                        },

                        city: { required: true
                        },
                        phone: {required: true,minlength: 8
                        },

                        nationality: {required: true
                        },
                        dob :{required :true},

                        password : {
                            minlength : 5
                        },
                        repassword : {
                            minlength : 5,
                            equalTo : "#password"
                        }

                    },

                    messages: {

                        first_name:      "Please specify your First name",
                        last_name:       "Please specify your Last name",
                        dob :"Please specify date of birth",

                        state :"please specify sate",

                        occupation : "Please specify your occupation",
                        city :"Please specify your city",
                        company : "Please specify company",
                        name_of_reporting_staff  : "Please specify name of staff to contact",
                        phone_of_reporting_staff : "please specify phone number of staff you are reporting to",
                        employment_segment : "please specify employment segment",
                        employment_status : "please specify employment status",
                        occupation : "please specify occupation",

                        phone:{
                            required:   "Please specify your phone number",
                            minlength:  "Your phone number must be of a minimum of 8"
                        },
                        email: {
                            required:   "We need your email address to contact you",
                            email:      "Your email address must be in the format of name@domain.com"
                        },

                        nationality:     "Please specify nationality"

                    },

                    highlight: function (element) {
                        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    unhighlight: function (element) {
                        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                    },
                    errorElement: 'span',
                    errorClass: 'help-block',
                    errorPlacement: function (error, element) {
                        if (element.parent('.input-group').length) {
                            error.insertAfter(element.parent());
                        } else {
                            error.insertAfter(element);
                        }
                    }
                });

            });


    </script>
<?php
//include footer
include("inc/google-analytics.php");
?>