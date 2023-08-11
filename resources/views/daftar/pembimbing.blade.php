<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicon.png" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" />
</head>

<body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
        <div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <a href="{{asset('assets')}}/intro.html"><img src="{{asset('assets')}}/images/logo.png" alt="" /></a>
                            <h4 class="card-title mt-3">Daftar Sebagai Pembimbing</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                                @endif
                                @if(Session::has('notif'))
                                <div class="alert alert-danger">{{Session::get('notif')['msg']}}</div>
                                @endif
                                <form class="signin_validate row g-3" action="{{ url('daftar/pembimbing/post') }}" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="NIP" name="nip" />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Nama" name="nama" />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Username" name="username" />
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="form-control" placeholder="Password" name="password" />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Keahlian" name="keahlian" />
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Sign in
                                        </button>
                                    </div>
                                </form>
                                <p class="mt-3 mb-0">
                                    Don't have an account?
                                    <a class="text-primary" href="signup.html">Sign up</a>
                                </p>
                            </div>
                        </div>
                        <div class="privacy-link">
                            <a href="signup.html">Have an issue with 2-factor authentication?</a>
                            <br />
                            <a href="signup.html">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('assets')}}/js/scripts.js"></script>
    <script></script>
</body>

</html>