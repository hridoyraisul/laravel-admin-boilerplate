<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets/auth/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}">
</head>
<body>

<div class="main">

    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{asset('assets/auth/images/signin-image.jpg')}}" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Login</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or <a href="{{route('register')}}">Signup here</a></span>
{{--                        <ul class="socials">--}}
{{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="{{asset('assets/auth/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/auth/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
