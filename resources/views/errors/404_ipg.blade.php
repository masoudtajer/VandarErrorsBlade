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

    <!-- Favicon -->
    <link rel="icon" href="{{env('APP_URL')}}/assets/img/vsign.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      body{
        text-align: right;
        direction: rtl;
      }
      #callback_title{
        text-align: center;
        margin-top: 10%;
      }
      #callback_link{
        line-height: inherit;
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
      #callback_btn{
        margin:auto;
        display:block;
        cursor: pointer;
        height: 2.875rem;
        font-size: 13px;
        background: #4C9F87;
        color: #fff;
        padding: 0.625rem 0.9375rem;
        font-size: 0.95rem;
        height: 2.5rem;
        border-radius: 3px;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
      }

    </style>
</head>
<body>
    <div id="callback_box">
      <h5 id="callback_title">برای تکمیل فرایند خرید، بر روی دکمه زیر کلیک کنید.</h5>
      <a id="callback_link" href="{{url()->full()}}" >
        <button type="button" id="callback_btn">بازگشت به سایت پذیرنده</button>
      </a>
    </div>
</body>
</html>
