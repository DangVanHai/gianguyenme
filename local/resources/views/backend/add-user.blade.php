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

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">Add User</div>
				<div class="card-body card-block">
					<form action="" method="post" class="">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa  fa-male"></i></div>
								<input type="text" id="username" name="full name" placeholder="your name" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" id="username" name="username" placeholder="Username" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								<input type="email" id="email" name="email" placeholder="Email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" id="password" name="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa  fa-group (alias)"></i></div>
								<select name="selectSm" id="SelectLm" class="form-control form-control">
									<option value="0">Please select</option>
									<option value="1">User</option>
									<option value="2">Option</option>
									<option value="3">Option</option>
									<option value="4">Option</option>
									<option value="5">Option</option>
								</select>
							</div>
						</div>
							<div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	@section('script')

	<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
	@stop
	<!-- /script -->
	@stop