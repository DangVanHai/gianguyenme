@extends('backend.master')
@section('title','Add-users')
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
					<li><a href="#">User</a></li>
					<li class="active">Add</li>
				</ol>
			</div>
		</div>
	</div>
</div>
@include('backend.errors.errors')
@foreach($show->all() as $employee)
<div class="content mt-3">
	<div class="animated fadeIn">
		<form method="post" >
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">Employee Detail</div>
					<div class="card-body card-block">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa  fa-male"></i></div>
								<input type="text" id="full_name" disabled="" name="full_name" value="{{$employee->full_name}}" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" id="username" disabled="" name="username" value="{{$employee->username}}" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								<input type="email" id="email" disabled=""  name="email" value="{{$employee->email}}" class="form-control">
							</div>
						</div>
						<div class="form-actions form-group"><button type="button" name="submit" class="btn btn-outline-danger btn-sm" ><a href="{{asset('admin/users/edit/'.$employee->user_id)}}">Edit</a></button></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 ">
				<div class="card">
					<div class="card-header">employee contract</div>
					<div class="card-body card-block">
						<div class="form-group">
							<div class="input-group">
								<input type="text" id="function" disabled="" name="function" value="{{$employee->function}}" class="form-control">
								<div class="input-group-addon"><i class="fa">Position</i></div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								<input type="text" id="phone" disabled="" name="phone" value="{{$employee->phone}}" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-home"></i></div>
								<input type="text" id="address" disabled="" name="address" value="{{$employee->address1}}" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
								<input type="text" id="id_card" disabled="" name="id_card" value="{{$employee->id_card}}" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<span><img id="avatar" class="thumbnail" src="{{asset('local/stogare/avatar/'.$employee->avatar)}}"></span>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-12 col-md-12"><textarea disabled="" name="employee_detail" id="textarea-input" rows="3" placeholder="{{$employee->employee_detail}}" class="form-control"></textarea></div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endforeach
@section('script')
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
@stop
<!-- /script -->
@stop