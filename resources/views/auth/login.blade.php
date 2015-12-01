
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>CMS Management</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<script src="{{ asset('/public/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>

	<!-- Bootstrap 3.3.4 -->
	<link href="{{ asset('/public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="{{ asset('/public/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.register-page{background-image: url({{ asset('dist/img/East_Bandung_skyline.jpg') }});}
	</style>
	<!-- iCheck -->
	<!-- <link href="{{ asset('plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" /> -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="#"><b>Nasi</b>Goreng</a>
		</div>

		<div class="register-box-body">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<p class="login-box-msg">Administrator only</p>
			<form method="POST" action="{{ url('/auth/login') }}">
				<div class="form-group has-feedback">
					<input name="email" type="text" class="form-control" placeholder="Username"/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="password" type="password" class="form-control" placeholder="Password"/>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">    
						<!-- <div class="checkbox icheck">
							<label>
								<input type="checkbox"> Remember Me
							</label>
						</div>   -->                      
					</div><!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					</div><!-- /.col -->
				</div>
			</form>       

		</div><!-- /.form-box -->
	</div><!-- /.register-box -->

	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset('/public/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<!-- iCheck -->
	<!--<script src="{{ asset('plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>-->
	<script>
		// $(function () {
		// 	$('input').iCheck({
		// 		checkboxClass: 'icheckbox_square-blue',
		// 		radioClass: 'iradio_square-blue',
		// 		increaseArea: '20%' // optional
		// 	});
		// });
	</script>
</body>
</html>
