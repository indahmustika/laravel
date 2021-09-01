<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tech Blog Admin</title>
	<link rel="shortcut icon" href="{{asset('user/images/favicon.ico')}}" type="image/x-icon"/>
	<link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body class="bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-12 col-md-9">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-header bg-gradient-primary">
						<h1 class="h4 text-gray-900 text-center"><img src="{{asset('user/images/version/tech-logo.png')}}" alt=""></h1>
					</div>
					<div class="card-body p-0 ">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<form class="user" action="{{url('auth')}}" method="POST">
										@csrf
										<div class="form-group">
											<input type="text" name="username" class="form-control form-control-user" placeholder="Username">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
										</div>
										<input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
</body>
</html>