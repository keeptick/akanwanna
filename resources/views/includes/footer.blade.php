<!--=== Footer Version 1 ===-->
<!--=== Footer Version 1 ===-->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-3 md-margin-bottom-40">
                    @if($aboutus)
                    <a href="{{url('')}}"><img id="logo-footer" class="footer-logo" src="{{url('')}}/preview/akawana/assets/img/logo2-default.png" alt=""></a>
                    <p>{{$aboutus->description}}</p>
                    @endif
                </div><!--/col-md-3-->
                <!-- End About -->

                <!-- Latest -->
                <div class="col-md-3 md-margin-bottom-40">
                    <div class="posts">
                        <div class="headline"><h2>Latest Posts</h2></div>
                        <ul class="list-unstyled latest-list">
                            @if($recentposts)
                            @foreach($recentposts as $post)
                            <li>
                                <a href="#">{{$post->title}}</a>
                                <small>{{date_format(date_create($post->created_at),"M j, Y")}}</small>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div><!--/col-md-3-->
                <!-- End Latest -->

                <!-- Link List -->
                <div class="col-md-3 md-margin-bottom-40">
                    <div class="headline"><h2>Useful Links</h2></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="{{url('')}}/pages/about-us">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{url('')}}/events">Events</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{url('')}}/news">News</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{url('')}}/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div><!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class="col-md-3 map-img md-margin-bottom-40">
                    <div class="headline"><h2>Contact Us</h2></div>
                    <address class="md-margin-bottom-40">
                        {{$settings->address}}<br />
                        {{$settings->state}}, {{$settings->country}} <br />
                        Phone: &nbsp;{{$settings->phone}} <br />
                        Phone 2: {{$settings->phone2}} <br />
                        Email: <a href="{{$settings->email}}" class="">{{$settings->email}}</a>
                    </address>
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2016 &copy; All Rights Reserved.
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <ul class="footer-socials list-inline">
                        @foreach($socials as $social)
                        <li>
                            <a href="{{$social->social_link}}" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$social->social_title}}">
                                <i class="{{$social->social_icon}}"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
<!--=== End Footer Version 1 ===-->