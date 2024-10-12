<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{Asset('Asset/backend/css/style.css')}}">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->

	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start --
	<!-- [ navigation menu ] end -->
	
	
<section class="login-signup section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="login">
                    <div class="text-center"><a href="index.html"><img src="{{asset('asset/frontend/images/logos/logo.png')}}" alt="" class="img-fluid"></a></div>

                    <h3 class="mt-4">Login Here</h3>
                    <p class="mb-5">Enter your valid mail & password</p>
   
                    <form method="POST" action="{{ route('login') }}" class="login-form row">
                    @csrf
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="loginemail">Email</label>
                                <input type="text" id="loginemail" class="form-control" name="email" placeholder="Enter mail" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Login</button>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $errors)
                                    <li>{{$errors}}</li>
                                @endforeach
                            </ul>
                        </div>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                            @endif
                            <p class="mt-5 mb-0">Not a member yet? <a href="{{route('register')}}">Register Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{Asset('Asset/backend/js/vendor-all.min.js')}}"></script>
    <script src="{{Asset('Asset/backend/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{Asset('Asset/backend/js/ripple.js')}}"></script>
    <script src="{{Asset('Asset/backend/js/pcoded.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{Asset('Asset/backend/js/plugins/apexcharts.min.js')}}"></script>


<!-- custom-chart js -->
<script src="{{Asset('Asset/backend/js/pages/dashboard-main.js')}}"></script>
</body>

</html>
