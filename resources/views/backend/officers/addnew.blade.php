@extends("backend.layouts.default")
@section("content")
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 9/8/16
 * Time: 11:11 AM
 */
//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["posts"]["sub"]["addnew"]["active"] = true;

$breadcrumbs["Posts"] =""
?>
<script src="{{url('')}}/js/app.config.js"></script>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->

<?php
//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
//$breadcrumbs["New Crumb"] => "http://url.com"
//$breadcrumbs["Pages"] = "";
include("inc/ribbon.php");
?>
<?php //$user = \Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
<!-- MAIN CONTENT -->

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Officers <span> > Add new a Officer</span></h1>
    </div>

</div>

<!-- widget grid -->
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <article class="col-md-12">
            <section>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <div class="text-left">
                        {!! HTML::decode(HTML::linkRoute('officerslisting','<span class="btn-label"><i class="glyphicon glyphicon-back"></i> Back to Officers List'))!!}
                    </div>
                </div>
            </section>
            {{Form::open(array('', 'method'=>'POST', 'class'=>'form-horizontal', 'files'=>true)) }}
            <div class="row">
                <div class="col-md-12">
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
                <div class="col-sm-9">
                    <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" role="widget" style="">
                        <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus"></i></a>  </div>
                            <span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
                            <h2 class="font-md"><strong>Set </strong> <i>Content</i></h2>
                            <!--<span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span>-->
                        </header>
                        <!-- widget div-->
                        <div role="content" style="display: block;">
                            <input type="hidden" id="created_by" name="created_by">
                            <input type="hidden" id="type" name="type" value="page">
                            <!-- widget content -->
                            <div class="widget-body ">
                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Firstname </label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="title" name="firstname" type="text" required="required" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Lastname</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="permalink" name="lastname" type="text">
                                    </div>
                                </div> <br/><br/>
                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Othername</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="title" name="othername" type="text" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Email</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="" name="email" type="text">
                                    </div>
                                </div> <br/><br/>
                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Department</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="title" name="department" type="text" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Position</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="" name="position" type="text">
                                    </div>
                                </div> <br/><br/>
                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Phone</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="title" name="phone" type="text" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group-inline">
                                    <label class="col-md-2 control-label">Images</label>
                                    <div class="col-md-4">
                                        <input class="form-control" placeholder="" id="" name="image" type="file">
                                    </div>
                                </div> <br/><br/>

                            </div>
                            <!-- end widget content -->


                        </div>
                        <!-- end widget div -->
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="jarviswidget jarviswidget-sortable" id="wid-id-12"  data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" role="widget">

                        <header role="heading" class=""><div class="jarviswidget-ctrls" role="menu"><a href="javascript:void(0);" class="button-icon jarviswidget-refresh-btn" data-loading-text="&nbsp;&nbsp;Loading...&nbsp;" rel="tooltip" title="" data-placement="bottom" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>     </div>
                            <h2><strong>Publish &amp;</strong> <i>Page Sttings</i></h2>

                            <span class="jarviswidget-loader" style="display: none;"><!--<i class="fa fa-refresh fa-spin"></i></span>--></header>

                        <!-- widget div-->
                        <div role="content" class="">


                            <!-- widget content -->
                            <div class="widget-body">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group"><?php //$user = \Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-cog"></i>
                                            Save &amp; Publish
                                        </button>
                                        <!--<a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-cog"></i> Save &amp; Publish</a>-->

                                    </div>
                                    <hr>

                                    <div class="form-group">

                                    </div>
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
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
<!-- end widget grid -->
<!-- ==========================CONTENT ENDS HERE ========================== -->
<script src="{{url('')}}/js/plugin/ckeditor/ckeditor.js"></script>
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

        return domain;
    }


    $(document).ready(function() {
        CKEDITOR.replace( 'p_content',
            {
                height: '380px', startupFocus : true,
                filebrowserBrowseUrl :''+getRootUrl+'/js/plugin/ckeditor/filemanager/browser/default/browser.html?Connector='+getRootUrl+'/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
                filebrowserImageBrowseUrl :''+getRootUrl +'/js/plugin/ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector='+getRootUrl+'/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
                filebrowserFlashBrowseUrl :''+getRootUrl +'/js/plugin/ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector='+getRootUrl+'/js/plugin/ckeditor/filemanager/connectors/php/connector.php',
                filebrowserUploadUrl  :''+getRootUrl +'/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=File',
                filebrowserImageUploadUrl :''+getRootUrl +'/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
                filebrowserFlashUploadUrl : ''+getRootUrl +'/js/plugin/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
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

        });
        $("#title").keyup(function(){
            perma = $(this).val()
            perma = perma.replace(/\s/g,"-")
            perma = perma.toLowerCase()
            //alert("all good")
            $("#permalink").val(perma)
        })
    });
</script>
@stop