@extends('backend.master')
@section('title','Empoyees')
@section('main')
@section('header')

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="assets/scss/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
@stop
<!-- dashboard -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Bksensor</a></li>
					<li class="active">Employees</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- /dashboard -->
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-2">
								<strong class="card-title ">Table Account</strong>
							</div>
							<div class="col-md-2 ml-auto">
								<button type="button" name="submit" class="btn btn-outline-primary btn-sm" ><a href="{{asset('admin/users/add')}}">Add User</a></button>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-dark">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">name</th>
									<th scope="col">phone</th>
									<th scope="col">function</th>
									<th scope="col">check</th>
									<th scope="col">Del</th>
								</tr>
							</thead>
							<tbody>
								@foreach($employees as $employee)
								<tr>
									<th scope="row">{{$employee->user_id}}</th>
									<td><a href="#">{{$employee->full_name}}</a></td>
									<td>{{$employee->phone}}</td>
									<td>{{$employee->function}}</td>
									<td>
										<a href="{{asset('admin/users/employees/show/'.$employee->user_id)}}"><span class="fa fa-eye" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
									<td>
										<a  href="{{asset('admin/users/employees/del/'.$employee->user_id)}}"><span  class="fa fa-times" style=" text-align: center;  width: 100%;height:100%;" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"></span></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$employees->links()}}
					</div>
				</div>
			</div>  
		</div><!-- .animated -->
	</div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->

@section('script')
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
@stop
<!-- /script -->
@stop
