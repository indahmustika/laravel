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
	<link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script type="text/javascript" src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
</head>

<body id="page-top">
	<div id="wrapper">
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"><div class="sidebar-brand-icon"><img src="{{asset('user/images/version/tech-logo.png')}}" alt=""></div></a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item active"><a class="nav-link bg-light text-dark" href="{{url('read')}}">Manage Article</a></li>
			<hr class="sidebar-divider">
		</ul>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">

				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<h1 class="h6 mb-0 text-primary-800"><b>TECH BLOG ADMIN</b></h1>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600">{{session('username')}}</span></a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="{{url('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
							</div>
						</li>
					</ul>
				</nav>

				<div class="container-fluid">
					<div class="d-sm-flex align-items-center justify-content-between mb-4"><h1 class="h3 mb-0 text-gray-800">Recent Article</h1></div>
					<div class="row">
						<div class="col-xl-12 col-lg-7">
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h5 class="m-0 text-primary">Add New Article</h5>
								</div>
								<div class="card-body">
									<form action="{{url('insert')}}" method="post">
										@csrf
										<div class="table-responsive">
											<table class="table table-sm table-borderless" width="100%" cellspacing="0">
												<tr>
													<div class="form-grup">
														<td width="15%"><label class="control-label">Title</label></td>
														<td width="85%"><input class="form-control" type="text" name="title" placeholder="Article Title" required="required"></td>
													</div>
												</tr>
												<tr>
													<div class="form-grup">
														<td width="15%"><label class="control-label">Thumbnail</label></td>
														<td width="85%"><input class="form-control" type="text" name="thumbnail" placeholder="Thumbnail Link" required="required"></td>
													</div>
												</tr>
												<tr>
													<div class="form-grup">
														<td width="15%"><label class="control-label">Excerpt</label></td>
														<td width="85%"><textarea class="form-control" name="excerpt" cols="110" rows="5" required="required"></textarea></td>
													</div>
												</tr>
												<tr>
													<div class="form-grup">
														<td width="15%"><label class="control-label">Content</label></td>
														<td width="85%"><textarea name="content" class="ckeditor" id="ckedtor" cols="110" rows="20" placeholder="Article Content" required="required"></textarea></td>
													</div>
												</tr>
												<tr>
													<div class="form-grup">
														<td width="15%"></td>
														<td width="85%">
															<button class="btn btn-success" type="submit" name="status" value="0">Draft</button>
															<button class="btn btn-primary" type="submit" name="status" value="1">Publish</button>
														</td>
													</div>
												</tr>
											</table>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Tech Blog</span>
					</div>
				</div>
			</footer>

		</div>
	</div>

	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
</body>
</html>