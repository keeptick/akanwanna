@extends("backend.layouts.default")
@section("content")
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 9/8/16
 * Time: 11:10 AM
 */

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["officers"]["sub"]["list"]["active"] = false;

$breadcrumbs["ofiicers"] =""
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
        <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-code"></i> Officers <span>> All Listing</span></h1>
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
            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-2" data-widget-collapsed="false" data-widget-editbutton="false" data-widget-fullscreenbutton="true" data-widget-colorbutton="true">

                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>All Officers </h2>

                </header>
                <!-- widget div-->
                <div>
                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <div class="text-right">
                            {{--@if($user->can('create_post'))--}}
                            {!!HTML::decode(HTML::linkRoute('addofficer','<span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span> Add New','new',array("class"=>"btn btn-labeled btn-primary")))!!}
                            {{--@endif--}}
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Date Added</th>
                                <th colspan="2">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--*/ $x = 1 /*--}}
                            @foreach($officers as $officer)
                            <tr>
                                <td>{{$x }}</td>
                                <td>{{$officer->firstname}}</td>
                                <td>{{$officer->lastname}}</td>
                                <td>{{$officer->email}}</td>
                                <td>{{$officer->department}}</td>
                                <td>{{$officer->position}}</td>
                                <td>{{date_format(date_create($officer->created_at),"Y/m/d")}}</td>
                                <td>

                                    {!! HTML::decode(HTML::linkRoute('editofficer','<i class="fa fa-edit"></i> Edit',$officer->id)) !!}

                                </td>
                                <td>


                                    <a href="#" data-toggle="modal" data-target="#myModal{{$officer->id}}"><i class="fa fa-trash"> Delete</a></i> <!-- Modal -->
                                    <div class='modal fade' id='myModal{{$officer->id}}' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header  ' style="background-color: #3276B1; color:#fff">
                                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
                                                        &times;
                                                    </button>
                                                    <h1 class='modal-title' id='myModalLabel'>Remove Officer {{$officer->id}}</h1>
                                                </div>
                                                <div class='modal-body' id="mbody{{$officer->id}}">

                                                    <div class='row' >
                                                        <div class='col-md-12'>

                                                            <input type="hidden" id="pgid{{$officer->id}}" name="pgid" value="{{$officer->id}}">

                                                            <h2>Are you sure you want to remove <b>{{$officer->id}}</b> from the database ?</h2>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>
                                                        Cancel
                                                    </button>
                                                    <button type='button' class='btn btn-primary datadel' dal="{{$officer->id}}">
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
                        {{--$officers->links()--}}
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
<!-- end widget grid -->
<!-- ==========================CONTENT ENDS HERE ========================== -->
@stop