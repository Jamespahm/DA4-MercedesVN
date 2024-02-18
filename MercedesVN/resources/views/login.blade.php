<!doctype html>
<html>

<head>
    <title>Mercedes - Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/Logo-icon.svg') }}">
    <link href="{{ asset('css/register.css') }}" rel='stylesheet' type='text/css' media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('font/fontawesome-free-6.2.1-web/css/all.css') }}">

    <!-- /css -->
</head>

<body>
    <h1 class="w3ls">Mercedes Me ID</h1>
    <div class="content-w3ls">
        <div class="content-agile11">
            <a href="{{ route('index') }}">
                <h2 class="agileits1">Mercedes-Benz</h2>
                <p class="agileits2"> <i class="fa-solid fa-angles-left"></i> Quay lại trang chủ.</p>
            </a>
        </div>
        <div class="content-agile2" style="margin-top: 80px;">
            <form action="login1" method="post">

                <div class="form-control w3layouts">
                    <input type="text" id="tk" name="tk" autocomplete="off"
                        placeholder="Email hoặc số điện thoại" title="Vui lòng nhập email hoặc số điện thoại"
                        required="">
                </div>

                <div class="form-control agileinfo">
                    <input type="password" class="lock" name="password" autocomplete="off" placeholder="Mật khẩu"
                        id="password1" title="Vui lòng nhập mật khẩu" required="">
                </div>

                @if (session('message'))
                <p class="error-message">
                    {{ session('message') }}
                </p>
            @endif
                @csrf
                <input type="submit" class="register" value="Đăng nhập">
            </form>
        

            <script type="text/javascript">
                window.onload = function() {
                    document.getElementById("password1").onchange = validatePassword;
                    document.getElementById("password2").onchange = validatePassword;
                }

                function validatePassword() {
                    var pass2 = document.getElementById("password2").value;
                    var pass1 = document.getElementById("password1").value;
                    if (pass1 != pass2)
                        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                    else
                        document.getElementById("password2").setCustomValidity('');
                    //empty string means no validation error
                }
            </script>
            <p class="wthree w3l">Bạn chưa có tài khoản ? <a style="color:aqua" href="{{ route('register') }}"> tạo tài khoản</a></p>

        </div>
        <div class="clear"></div>
    </div>
</body>


</html>
