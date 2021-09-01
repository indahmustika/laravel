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
									<h5 class="m-0 text-primary">Recent Article</h5>
								</div>
								<div class="card-body">
									<a href="{{url('add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New Article</a>
									<p></p>
									<div class="table-responsive">
										<table class="table" id="example" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th width="3%">#</th>
													<th width="20%">Title</th>
													<th width="30%">Excerpt</th>
													<th width="20%">Updated At</th>
													<th width="10%">Status</th>
													<th width="17%">Action</th>
												</tr>
											</thead>
											<tbody>
												@php $count = 0; @endphp
												@foreach($data as $result=>$value)
												@php $count++; @endphp
												<tr>
													<td>@php echo $count; @endphp</td>
													<td>{{$value->title}}</td>
													<td>{{$value->excerpt}}</td>
													<td>{{$value->updated_at}}</td>
													@if($value->status =='1')  
														<td><span class="badge badge-primary">Published</span></td>
													@else
														<td><span class="badge badge-secondary">Draft</span></td>
													@endif
													<td>
														<a href="{{url('delete',array($value->id))}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
														<a href="{{url('edit',array($value->id))}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable({
				"order": [[3, "desc"]]
			});
		});
	</script>
</body>
</html>