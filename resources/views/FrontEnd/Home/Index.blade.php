@extends('Layouts.HomeApp')


@section('Content')
    <div class="loadMore">

        @foreach ($posts as $post)
            
        <div class="central-meta item">
            <div class="user-post">
                <div class="friend-info">
                    <figure>
                        {{-- {{$post->user_id}} --}}
                        <img src="{{asset('/profile_picture/'.$post->user->profile_picture)}}" alt="">
                    </figure>
                    <div class="friend-name">
                        <ins><a href="time-line.html" title="">{{$post->user->username}}</a></ins>
                        <span>published: {{$post->created_at->format('F ,j Y g:i:A')}}</span>
                    </div>
                    <div class="post-meta">
                        <img src="{{asset($post->image)}}" alt="No Image Found">
                        <div class="we-video-info">
                            <ul>
                                <li>
                                    <span class="views" data-toggle="tooltip" title="views">
                                        <i class="fa fa-eye"></i>
                                        <ins>1.2k</ins>
                                    </span>
                                </li>
                              
                                <li>
                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                        <i class="fa fa-comments-o"></i>
                                        <ins>52</ins>
                                    </span>
                                </li>
                                <li>
                                    <span class="like" data-toggle="tooltip" title="like" data-user-id="{{$userdata->id}}"  data-post-id="{{$post->id}}" onclick="like(this)">
                                        <i class="ti-heart"></i>
                                        <ins>2.2k</ins>
                                    </span>
                                </li>
                                <script>
                                    function like(element)
                                    {
                                        // console.log("inside function");
                                        // alert('likes button clicked');
                                        
                                        // var - redeclare and re assign
                                        // var name = admin
                                        // name = darshan - re assign
                                        // var name = thunder - re declare


                                        // let - re assign only
                                        // let name = admin - assign
                                        // name = thunder  - re assign
                                        // let name = thunder  - not possible re declaration

                                        // const - nothing - only declaration
                                        // const name = darshan

                                        // console.log(element);
                                        
                                        var userid = element.getAttribute('data-user-id');
                                        var postid = element.getAttribute('data-post-id');
                                        // console.log(userid,postid);

                                        if(!userid || !postid)
                                        {
                                            console.error("user id or post id not available");
                                            return;
                                        }

                                        $.ajax({
                                            url:'/save-like',
                                            method:"post",
                                            data : {
                                                    _token : '{{csrf_token()}}',
                                                    user_id : userid, 
                                                    post_id : postid
                                                },
                                                success:function(response) 
                                                {
                                                    console.log("like added successfully",response);
                                                    
                                                },
                                                error: function(xhr,status,error)
                                                {
                                                    console.error("something went wrong",error); 
                                                }
                                        });
                                        
                                    }


                                </script>
                                <li>
                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                        <i class="ti-heart-broken"></i>
                                        <ins>200</ins>
                                    </span>
                                </li>
                                <li class="social-media">
                                    <div class="menu">
                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-html5"></i></a></div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-facebook"></i></a></div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-google-plus"></i></a></div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-twitter"></i></a></div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-css3"></i></a></div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-dribbble"></i></a>
                                            </div>
                                        </div>
                                        <div class="rotater">
                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                        class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="description">

                            <p>
                                {{$post->caption}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="coment-area">
                    <ul class="we-comet">
                        <li>
                            <div class="comet-avatar">
                                <img src="images/resources/comet-1.jpg" alt="">
                            </div>
                            <div class="we-comment">
                                <div class="coment-head">
                                    <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                    <span>1 year ago</span>
                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                </div>
                                <p>we are working for the dance and sing songs. this car is very awesome for the youngster.
                                    please vote this car and like our post</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="comet-avatar">
                                        <img src="images/resources/comet-2.jpg" alt="">
                                    </div>
                                    <div class="we-comment">
                                        <div class="coment-head">
                                            <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                            <span>1 month ago</span>
                                            <a class="we-reply" href="#" title="Reply"><i
                                                    class="fa fa-reply"></i></a>
                                        </div>
                                        <p>yes, really very awesome car i see the features of this car in the official
                                            website of <a href="#" title="">#Mercedes-Benz</a> and really
                                            impressed :-)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="comet-avatar">
                                        <img src="images/resources/comet-3.jpg" alt="">
                                    </div>
                                    <div class="we-comment">
                                        <div class="coment-head">
                                            <h5><a href="time-line.html" title="">Olivia</a></h5>
                                            <span>16 days ago</span>
                                            <a class="we-reply" href="#" title="Reply"><i
                                                    class="fa fa-reply"></i></a>
                                        </div>
                                        <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but
                                            this car is really outstanding than lexus</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comet-avatar">
                                <img src="images/resources/comet-1.jpg" alt="">
                            </div>
                            <div class="we-comment">
                                <div class="coment-head">
                                    <h5><a href="time-line.html" title="">Donald Trump</a></h5>
                                    <span>1 week ago</span>
                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                </div>
                                <p>we are working for the dance and sing songs. this video is very awesome for the
                                    youngster. please vote this video and like our channel
                                    <i class="em em-smiley"></i>
                                </p>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="" class="showmore underline">more comments</a>
                        </li>
                        <li class="post-comment">
                            <div class="comet-avatar">
                                <img src="images/resources/comet-1.jpg" alt="">
                            </div>
                            <div class="post-comt-box">
                                <form method="post">
                                    <textarea placeholder="Post your comment"></textarea>
                                    <div class="add-smiles">
                                        <span class="em em-expressionless" title="add icon"></span>
                                    </div>
                                    <div class="smiles-bunch">
                                        <i class="em em---1"></i>
                                        <i class="em em-smiley"></i>
                                        <i class="em em-anguished"></i>
                                        <i class="em em-laughing"></i>
                                        <i class="em em-angry"></i>
                                        <i class="em em-astonished"></i>
                                        <i class="em em-blush"></i>
                                        <i class="em em-disappointed"></i>
                                        <i class="em em-worried"></i>
                                        <i class="em em-kissing_heart"></i>
                                        <i class="em em-rage"></i>
                                        <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                    <button type="submit"></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
