<!doctype html>
<html>

<head>
	<title>Mercedes - Tạo tài khoản</title>
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
		<div class="content-agile1">
			<a href="{{ route('index') }}">
				<h2 class="agileits1">Mercedes-Benz</h2>
                <p class="agileits2"> <i class="fa-solid fa-angles-left"></i> Quay lại trang chủ.</p>
			</a>
		</div>
		<div class="content-agile2">
			<form action="#" method="post">
				<div class="form-control w3layouts">
					<input type="text" id="fullname" name="fullname" placeholder="Họ và tên" autocomplete="off"
						title="Vui lòng nhập họ tên đầy đủ" required="">
				</div>
		
				<div class="form-control w3layouts">
					<input type="email" id="email" name="email" placeholder="mail@example.com" autocomplete="off"
						title="Vui lòng nhập địa chỉ email" required="">
				</div>

				<div class="form-control w3layouts">
					<input type="tel" id="sdt" name="sdt" pattern="[0-9]{10}" autocomplete="off"
						placeholder="0987654321" title="Vui lòng nhập số điện thoại" required="">
				</div>

				<div class="form-control w3layouts">
					<input type="text" id="adress" name="adress" placeholder="Địa chỉ" autocomplete="off"
						title="Vui lòng nhập địa chỉ" required="">
				</div>


				<div class="form-control agileinfo">
					<input type="password" class="lock" name="password" autocomplete="off" placeholder="Mật khẩu"
						id="password1" required="">
				</div>

				<div class="form-control agileinfo">
					<input type="password" class="lock" name="confirm-password" autocomplete="off"
						placeholder="Xác nhận mật khẩu" id="password2" required="">
				</div>

				<input type="submit" class="register" value="Tạo tài khoản">
			</form>
			<script type="text/javascript">
				window.onload = function () {
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
			<p class="wthree w3l">Bạn đã có tài khoản ? <a style="color:aqua" href="{{ route('login') }}"> đăng nhập </a></p>

		</div>
		<div class="clear"></div>
	</div>
</body>

</html>