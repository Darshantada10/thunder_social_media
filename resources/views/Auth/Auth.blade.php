<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="{{ asset('HomeAsset/images/fav.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('HomeAsset/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('HomeAsset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('HomeAsset/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('HomeAsset/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="land-featurearea">
                        <div class="land-meta">
                            <h1>Winku</h1>
                            <p>
                                Winku is free to use for as long as you want with two active projects.
                            </p>
                            <div class="friend-logo">
                                <span><img src="{{ asset('HomeAsset/images/wink.png') }}" alt=""></span>
                            </div>
                            <a href="#" title="" class="folow-me">Follow Us on</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-reg-bg">

                        <div class="log-reg-area sign">
                            <h2 class="log-title">Login</h2>
                            <p>
                                Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a
                                    href="#" title="">Join now</a>
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" id="input" required="required" />
                                    <label class="control-label" for="input">Username</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Always
                                        Remember Me.
                                    </label>
                                </div>
                                <a href="#" title="" class="forgot-pwd">Forgot Password?</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn signin" type="button"><span>Login</span></button>
                                    <button class="mtr-btn signup" type="button"><span>Register</span></button>
                                </div>
                            </form>
                        </div>



                        <div class="log-reg-area reg">

                            <h2 class="log-title">Register</h2>
                            
                            <p>
                                Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a
                                    href="#" title="">Join now</a>
                            </p>
                            
                            <form action="{{url('new/user/register')}}" method="post">
                                
                                @csrf

                                <div class="form-group">
                                    <input type="text" required name="name" id="name" />
                                    <label class="control-label" for="name">Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="username" id="username" />
                                    <label class="control-label" for="username">User Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="email" id="email" />
                                    <label class="control-label" for="email">Email</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required name="password" id="password" />
                                    <label class="control-label" for="password">Password</label>

                                    <span class="password-toggle-icon"><i class="fas fa-eye" id="togglepassword"></i></span>

                                </div>
                                <div class="form-group">
                                    <input type="date" name="dob" id="dob" />
                                    <label class="control-label" for="dob">Date Of Birth</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" checked="checked" /><i
                                                class="check-box"></i>Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" /><i class="check-box"></i>Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="others" /><i class="check-box"></i>Others
                                        </label>
                                    </div>
                                </div>
                               
                                <a href="#" title="" class="already-have">Already have an account</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn" type="submit"><span>Register</span></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('HomeAsset/js/main.min.js') }}"></script>
    <script src="{{ asset('HomeAsset/js/script.js') }}"></script>
<style>
    .password-toggle-icon
    {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>

<script>
    const togglepassword = document.getElementById('togglepassword');

    const password = document.querySelector('#password');

    togglepassword.addEventListener('click',function()
    {
        var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type',type)

        if(type == 'password')
        {
            togglepassword.classList.remove('fa-eye-slash');
            togglepassword.classList.add('fa-eye');
        }
        else
        {
            togglepassword.classList.remove('fa-eye');
            togglepassword.classList.add('fa-eye-slash');
        }
        // togglepassword.addClass('fa-eye-slash');
        // this.classList.toggle('fa-eye-slash')
    });

</script>
</body>

</html>
