@extends("backend.layouts.default")
@section("content")
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 9/9/16
 * Time: 4:19 PM
 */
//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["members"]["sub"]["list"]["active"] = false;

$breadcrumbs["members"] =""
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
<?php $user = null //\Toddish\Verify\Models\User::find(\Auth::user()->id); ?>
<!-- MAIN CONTENT -->
<div id="content">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-last_name txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Members <span>> Listing</span></h1>
        </div>
    </div>
    <!-- widget grid -->
    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            <!-- NEW WIDGET START -->
            <!-- WIDGET END -->
            <!-- NEW WIDGET START -->
            <article class="col-md-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-blue" id="wid-id-2" data-widget-editbutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Membership Listing</h2>
                    </header>
                    <!-- widget div-->
                    <div>
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
                        </div>
                        <!-- end widget edit box -->
                        <!-- widget content -->
                        <div class="widget-body no-padding">
                            <div class="text-right">
                                {!!HTML::decode(HTML::linkRoute('memberaddnew','<span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span> Add New','new',array("class"=>"btn btn-labeled btn-primary")))!!}

                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th>Staff Name</th>
                                    <th>Staff Phone</th>
                                    <th>Date Created</th>
                                    <th>Last Modified</th>
                                    <th>Action</th>
                                    <th>s</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--*/ $x = 1 /*--}}
                                @foreach($members as $member)
                                <tr>
                                    <td>{{$x }}</td>
                                    <td><a href="{{url()}}/backend/members/details/{{$member->id}}"> {{$member->first_name}} {{strtoupper($member->last_name)}}</a></td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->phone}}</td>
                                    <td>{{$member->company}}</td>
                                    <td>{{$member->name_of_reporting_staff}}</td>
                                    <td>{{$member->phone_of_reporting_staff}}</td>
                                    <td>{{date_format(date_create($member->created_at),"Y/m/d")}}</td>
                                    <td>{{date_format(date_create($member->updated_at),"Y/m/d")}}</td>
                                    <td>

                                        {!!HTML::linkRoute('memberedit',"Edit",$member->id)!!}
                                    </td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal{{$member->id}}"><i class="fa fa-trash">Delete</a></i> <!-- Modal -->
                                        <div class='modal fade' id='myModal{{$member->id}}' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header  ' style="background-color: #3276B1; color:#fff">
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
                                                            &times;
                                                        </button>
                                                        <h1 class='modal-last_name' id='myModalLabel'>Remove Page {{$member->last_name}}</h1>
                                                    </div>
                                                    <div class='modal-body' id="mbody{{$member->id}}">

                                                        <div class='row' >
                                                            <div class='col-md-12'>

                                                                <input type="hidden" id="pgid{{$member->id}}" name="pgid" value="{{$member->id}}">

                                                                <h2>Are you sure you want to remove <b>{{$member->first_name}} {{$member->last_name}}</b> from the database ?</h2>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>
                                                            Cancel
                                                        </button>
                                                        <button type='button' class='btn btn-primary datadel' dal="{{$member->id}}">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <a href="#" data-toggle="modal" data-target="#myModal{{$member->id}}"><i class="fa fa-trash">Delete</a></i> <!-- Modal -->
                                        <div class='modal fade' id='myModal{{$member->id}}' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header  ' style="background-color: #3276B1; color:#fff">
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
                                                            &times;
                                                        </button>
                                                        <h1 class='modal-last_name' id='myModalLabel'>Remove Page {{$member->last_name}}</h1>
                                                    </div>
                                                    <div class='modal-body' id="mbody{{$member->id}}">

                                                        <div class='row' >
                                                            <div class='col-md-12'>

                                                                <input type="hidden" id="pgid{{$member->id}}" name="pgid" value="{{$member->id}}">

                                                                <h2>Are you sure you want to remove <b>{{$member->first_name}} {{$member->last_name}}</b> from the database ?</h2>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>
                                                            Cancel
                                                        </button>
                                                        <button type='button' class='btn btn-primary datadel' dal="{{$member->id}}">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->


                                        <a href="#" data-toggle="modal" data-target="#myModal{{$member->id}}"><i class="fa fa-trash">Delete</a></i> <!-- Modal -->
                                        <div class='modal fade' id='myModal{{$member->id}}' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header  ' style="background-color: #3276B1; color:#fff">
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
                                                            &times;
                                                        </button>
                                                        <h1 class='modal-last_name' id='myModalLabel'>Remove Page {{$member->last_name}}</h1>
                                                    </div>
                                                    <div class='modal-body' id="mbody{{$member->id}}">

                                                        <div class='row' >
                                                            <div class='col-md-12'>

                                                                <input type="hidden" id="pgid{{$member->id}}" name="pgid" value="{{$member->id}}">

                                                                <h2>Are you sure you want to remove <b>{{$member->last_name}}</b> from the database ?</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>
                                                            Cancel
                                                        </button>
                                                        <button type='button' class='btn btn-primary datadel' dal="{{$member->id}}">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </td>
                                </tr>
                                {{--*/ $x++ /*--}}
                                @endforeach
                                </tbody>
                            </table>
                            {{$members->links()}}
                        </div>
                        <!-- end widget content -->
                    </div>
                    <!-- end widget div -->
                </div>
                <!-- end widget -->
            </article>
            <!-- WIDGET END -->
            <!-- NEW WIDGET START -->
            <!-- WIDGET END -->
        </div>
        <!-- end row -->
    </section>
    <!-- end widget grid -->
</div>
<!-- END MAIN CONTENT -->
<!-- ==========================CONTENT ENDS HERE ========================== -->
@stop

