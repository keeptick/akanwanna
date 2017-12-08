@extends("backend.layouts.default")
@section("content")
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 9/9/16
 * Time: 4:25 PM
 */
//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["members"]["sub"]["addnew"]["active"] = false;

$breadcrumbs["Members"] =url('')."/backend/members/index";
?>
<script src="{{url('')}}/js/app.config.js" xmlns="http://www.w3.org/1999/html"></script>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->

<?php
//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
//$breadcrumbs["New Crumb"] => "http://url.com"
//$breadcrumbs["Pages"] = "";
include("inc/ribbon.php");
?>
<?php //$user = \Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Members <span>> Add New</span></h1>

    </div>

</div>
<section>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <div class="text-left">
            {!!HTML::decode(HTML::linkRoute('members','<span class="btn-label"><i class="glyphicon glyphicon-back"></i> Back to Pages'))!!}
        </div>
    </div>
</section>

{{ Form::open(array('', 'method'=>'POST', 'class'=>'form-horizontal', "id"=>"addnew", 'files'=>true)) }}
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


        <input type="hidden" id="created_by" name="created_by">
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
                            <input type="text" class="form-control" id="first_name" autocomplete="off" name="first_name" placeholder=" " value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="last_name" autocomplete="off" name="last_name" placeholder=" " value="">
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Other Name</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="other_name" autocomplete="off" name="other_name" placeholder=" " value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Date of Birth</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="dob" autocomplete="off" name="dob" placeholder=" " value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="email" autocomplete="off" name="email" placeholder=" " value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="phone" autocomplete="off" name="phone" placeholder=" " value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-6">
                            <textarea name="address" id="address" class="form-control" autocomplete="off" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">City</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="city" name="city" autocomplete="off" value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">State</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="state" autocomplete="off" name="state" placeholder=" " value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="country" autocomplete="off" name="country" placeholder=" " value="">
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
            <h2><strong>Publish &amp;</strong> <i>Page Settings</i></h2>

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
                    <div class="form-group"><?php $user = null;// \Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-cog"></i>
                            {{--@if($user->is("Editor"))--}}
                            {{"Save"}}
                            {{--@elseif($user->is(array("CMS Manager","Administrator","Moderator")))--}}
                            {{--{{"Save &amp; Publish"}}
                            @endif
                            {{"Save &amp; Publish"}}--}}


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


<script>
function getRootUrl(){
    var curLocation = location.href;
    var domain;
    //find & remove protocol (http, ftp, etc.) and get domain
    if (curLocation.indexOf("://") > -1) {
        domain = curLocation.split('/')[2];
    }
    else {
        domain = curLocation.split('/')[0];
    }
    //find & remove port number
    domain = domain.split(':')[0];
    return "http://"+domain;
}

$(document).ready(function() {

    $('.time-inputs').timepicker({ 'timeFormat': 'H:i:s' });
    var validator = $('#addnew2').validate({
        rules: {
            title: {required: true,minlength : 2},
            permalink: {required: true,minlength : 2},
            p_content: {required : true },
            description :{
                required: true
            }

        },messages : {
            title : {
                required : 'Please enter a title'
            },
            permalink : {
                required : 'Permalink is field is required'
            },
            p_content : {
                required : "Please Enter content for yor event"
            },
            description : {
                required:"Please enter caption here"
            }
        },submitHandler: function(form) {
            $("#myModalCategoryNew").modal("hide")
            $("#myProcess").modal("show")
            $.ajax({url: ''+getRootUrl()+'/backend/events/categories',type: 'post',data: $(form).serialize(),dataType: 'json',
                success:function(data){if(data){$("div#transProcess").html("<div class='alert alert-info fade in'><button class='close' data-dismiss='alert'>×</button><i class='fa-fw fa fa-check'></i>"+data+"</div>")}else{alert(data);}setInterval(window.location.reload(),500000);}});
        },errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
        }
    });


    //CKEDITOR.replace( 'p_content', { height: '380px', startupFocus : true} );
    CKEDITOR.replace( 'p_content',
        {
            height: '380px', startupFocus : true,
            filebrowserBrowseUrl :''+getRootUrl()+'/js/plugin/ckeditor/filemanager/browser/default/browser.html?Connector='+getRootUrl()+'/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
            filebrowserImageBrowseUrl : ''+getRootUrl()+'/js/plugin/ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector='+getRootUrl()+'/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
            filebrowserFlashBrowseUrl :''+getRootUrl()+'/js/plugin/ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector='+getRootUrl()+'/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
            filebrowserUploadUrl  :''+getRootUrl()+'/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=File',
            filebrowserImageUploadUrl : ''+getRootUrl()+'/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
            filebrowserFlashUploadUrl : ''+getRootUrl()+'/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
        }
    );

    $( "#start_date,#end_date" ).datepicker({
        showWeek: false,
        firstDay: 1,
        dateFormat: 'yy-mm-dd'
    })

    var perma =""
    var perma2=""
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


    $(".radimg").each(function(){
        $(this).click(function(){
            $("#image").val($(this).val())
            $("#imgg").html("<img src='"+getRootUrl()+"/uploads/images/"+$(this).val()+ "' height='100' weight='100'>")
            return false
        })
    })
    // tab - pills toggle
    $('#show-tabs').click(function() {
        $this = $(this);
        if($this.prop('checked')){
            $("#widget-tab-1").removeClass("nav-pills").addClass("nav-tabs");
        } else {
            $("#widget-tab-1").removeClass("nav-tabs").addClass("nav-pills");
        }

    });


    $("#title").keyup(function(){

        perma = $(this).val()
        perma = perma.replace(/\s/g,"-")
        perma = perma.toLowerCase()
        //alert("all good")
        $("#permalink").val(perma)
    })
    $("#title").on("blur",function(){

        perma = $(this).val()
        perma = perma.replace(/\s/g,"-")
        perma = perma.toLowerCase()
        //alert("all good")
        $("#permalink").val(perma)
    })

    var progressbox     = $('#progressbox');
    var progressbar     = $('#progressbar');
    var statustxt       = $('#statustxt');
    var completed       = '0%';

    var options = {
        target:   '#output',   // target element(s) to be updated with server response
        beforeSubmit:  beforeSubmit,  // pre-submit callback
        uploadProgress: OnProgress,
        success:       afterSuccess,  // post-submit callback
        resetForm: true        // reset the form after successful submit
    };

    $('#MyUploadForm').submit(function() {
        $(this).ajaxSubmit(options);
        // return false to prevent standard browser submit and page navigation
        return false;
    });

//when upload progresses
    function OnProgress(event, position, total, percentComplete)
    {
        //Progress bar
        progressbar.width(percentComplete + '%') //update progressbar percent complete
        statustxt.html(percentComplete + '%'); //update status text
        if(percentComplete>50)
        {
            statustxt.css('color','#fff'); //change status text to white after 50%
        }
    }

//after succesful upload
    function afterSuccess(data)
    {

        $('#submit-btn').show(); //hide submit button
        $('#loading-img').hide(); //hide submit button
        //alert(data)
        var md = data.split("@@");
        $("#image").val(md[1])
        $("#imgg").html("<img src=''+getRootUrl()+'/uploads/images/"+md[1]+ "' height='100' weight='100'>")

    }

//function to check file size before uploading.
    function beforeSubmit(){
        //check whether browser fully supports all File API
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {

            if( !$('#imageInput').val()) //check empty input filed
            {
                $("#output").html("Oops please load a file?");
                return false
            }

            var fsize = $('#imageInput')[0].files[0].size; //get file size
            var ftype = $('#imageInput')[0].files[0].type; // get file type

            //allow only valid image file types
            switch(ftype)
            {
                case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
                default:
                    $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
                    return false
            }

            //Allowed file size is less than 1 MB (1048576)
            if(fsize>1048576)
            {
                $("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
                return false
            }

            //Progress bar
            progressbox.show(); //show progressbar
            progressbar.width(completed); //initial value 0% of progressbar
            statustxt.html(completed); //set status text
            statustxt.css('color','#000'); //initial color of status text


            $('#submit-btn').hide(); //hide submit button
            $('#loading-img').show(); //hide submit button
            $("#output").html("");
        }
        else
        {
            //Output error to older unsupported browsers that doesn't support HTML5 File API
            $("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
            return false;
        }
    }

//function to format bites bit.ly/19yoIPO
    function bytesToSize(bytes) {
        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (bytes == 0) return '0 Bytes';
        var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }


});

</script>
@stop

