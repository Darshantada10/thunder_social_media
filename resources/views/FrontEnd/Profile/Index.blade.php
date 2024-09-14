@extends('Layouts.HomeApp')

@section('Content')
    
{{-- 
<section>
    <div class="feature-photo">
        <figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
        <div class="add-btn">
            <span>1205 followers</span>
            <a href="#" title="" data-ripple="">Add Friend</a>
        </div>
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
            <input type="file"/>
            </label>
        </form>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="images/resources/user-avatar.jpg" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file"/>
                                </label>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                              <h5>Janice Griffith</h5>
                              <span>Group Admin</span>
                            </li>
                            <li>
                                <a class="" href="time-line.html" title="" data-ripple="">time line</a>
                                <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                <a class="" href="groups.html" title="" data-ripple="">Groups</a>
                                <a class="" href="about.html" title="" data-ripple="">about</a>
                                <a class="active" href="#" title="" data-ripple="">more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section>
    <div class="gap gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="page-contents">

                        @include('FrontEnd.Profile.02LeftSidebar')
                        @include('FrontEnd.Profile.01ProfileForm')
                        @include('FrontEnd.Profile.03RightSidebar')
                    
                    </div>	
                </div>
            </div>
        </div>
    </div>	
</section>



@endsection