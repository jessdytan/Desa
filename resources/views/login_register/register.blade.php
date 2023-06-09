<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					@csrf
					<span class="login100-form-title">
						REGISTRASI
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Mohon isi nama lengkap anda">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
						<span class="focus-input100"></span>
						@error('nama')
							<small>{{$message}}</small>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Mohon isi nomor telepon anda">
						<input class="input100" type="text" name="no_hp" placeholder="Nomor Telepon" value="{{ old('no_hp') }}">
						@error('no_hp')
							<small>{{$message}}</small>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi NIK anda">
						<input class="input100" type="text" name="nik" placeholder="Nomor Induk Kependudukan" value="{{ old('nik') }}">
						@error('nik')
							<small>{{$message}}</small>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi e-mail anda">
						<input class="input100" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
						@error('email')
							<small>{{$message}}</small>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon buat kata sandi anda">
						<input class="input100" type="password" name="password" placeholder="Kata Sandi" >
						<span class="focus-input100"></span>
						@error('password')
							<small>{{$message}}</small>
						@enderror
					</div>

					<div class="text-center p-t-13 p-b-23" data-validate="Centang kotak ini untuk melanjutkan">
						<input type="checkbox" name="snk"> &nbsp;

						<span class="txt1">
							Saya sudah mempelajari panduan ini
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Daftar
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Sudah memiliki akun?
						</span>

						<a href="{{ route('login_user') }}" class="txt3">
							Login sekarang!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>