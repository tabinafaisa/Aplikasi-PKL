<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicon.png">
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
</head>

<body>

    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
        <div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="auth-form card">
                            <div class="card-body">
                                <p class="text-center mb-3">Daftar Sebagai</p>
                                <form action="index.html" class="row g-3">
                                    
                                    <div class="col-12">
                                        <div class="text-center">
                                            <a href="{{url('daftar/peserta')}}" class="btn btn-primary btn-block">Peserta</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <a href="{{url('daftar/pembimbing')}}" class="btn btn-primary btn-block">Pembimbing</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <a href="{{url('daftar/humas')}}" class="btn btn-primary btn-block">Humas</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('assets')}}/js/scripts.js"></script>
    <script>

    </script>
</body>

</html>