<!doctype html>
<html lang="en">
<head>
    <title>وندار | ارائه دهنده راهکارهای پرداخت</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="وندار, درگاه پرداخت, ناحیه کاربری">
    <meta name="description" content="وندار - ناحیه کاربری">
    <meta name="author" content="vandar.io">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" href="{{env('APP_URL')}}/assets/img/vsign.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,700" rel="stylesheet">

    <link href="https://api.vandar.io/css/bootstrap.css" rel="stylesheet" type="text/css" >
    <link href="https://api.vandar.io/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" >
    <link href="https://api.vandar.io/css/web.css" rel="stylesheet" type="text/css" >
    <style>
        body{
            background-image: url('{{env('APP_URL').'/assets/img/vandar/backerror.png'}}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            overflow-y: hidden;
            overflow-x: hidden;
            color: #fff;
        }
        .logo{
            width: 45px;
            height: 45px;
            margin-top: 20px;
        }
        #vandar_box {
            position: relative;
            z-index: 0;
            margin-top: 100px;
        }
        #vandar_box:before{
            background-image: url('{{env('APP_URL').'/assets/img/vandar/Rectangle.svg'}}');
            background-size: 300px 300px;
            content:"";
            width: 300px;
            height: 300px;
            z-index: -2;
            position: absolute;
            right: 50%;
            transform: translateX(50%);
        }
        #vandar_box:after{
            background-image: url('{{env('APP_URL').'/assets/img/vandar/RepeatGrid3.svg'}}');
            position: absolute;
            z-index:98562358;
            background-size: 300px 300px;
            content:"";
            width:210px;
            height:170px;
            right: 50%;
            transform: translate(50%,-40%);
        }
        a{
            display: block;
        }
        .row{
            text-align: center;
        }
        .errorcode{
            margin-top: 70px;
            font-size: 40px;
            font-weight: 900;
        }
        .errrobox div{
            max-width: 200px;
            font-size: 10px;
            border-bottom: 1px dashed #fff;
            border-top: 1px dashed #fff;
            padding: 5px 0 5px 0;
        }

    </style>
    @yield('css')
</head>
<body>
<div class="container-fluid" >
    <div class="row justify-content-center" style="background-color: transparent">
        <div class="col-12">
            <a href="https://vandar.io">
                <img src="https://dash.vandar.io/img/Logo.fb897088.svg" alt="وندار" class="logo mx-auto d-block">
            </a>
        </div>
    </div>
    <div id="vandar_box" class="row justify-content-center ">
        <div  class="col-12">
            <div class="row justify-content-center errorcode">
                <div class="col-5" style="font-family:Arial">
                    @yield('code')
                </div>
            </div>
            <div class="row justify-content-center errrobox">
                <div class="col-5" >
                    @yield('text')
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                  @yield('btn')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
