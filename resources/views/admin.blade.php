

<!doctype html>
<html lang="en">
<head>
    <title>CFC Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/public/login/css/font-awesome.min.css">

    <link rel="stylesheet" href="public/login/css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url(public/login/images/loginBG.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">ADMIN PANEL LOGIN</h2>
            </div>

        </div>
        <!-- Confirmation Or Failure Message -->

        @if (\Session::has('failed'))
            <div class="alert alert-danger col-md-4" style="margin-left: 35%;">
                <ul>
                    <li>{!! \Session::get('failed') !!}</li>
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">

                    <form action="{{url('adminValidate')}}" class="signin-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #fff">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                    <div style="text-align: center;" >
                        <a href="{{url('register')}}"><button  class=" btn btn-info text-secondary submit px-3">Register Now</button></a>
                    </div>
                    <div style="text-align: center;" >
                        <a href="{{url('/')}}"><button  class=" btn btn-transparent text-secondary submit px-3">Back to Home</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="public/login/js/jquery.min.js"></script>
<script src="public/login/js/popper.js"></script>
<script src="public/login/js/bootstrap.min.js"></script>
<script src="public/login/js/main.js"></script>

</body>
</html>

