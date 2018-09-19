@extends('backend.master')
@section('title','Add-Product')
@section('main')
@section('header')
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/bootstrap-rating.css">

<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="assets/scss/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
@stop
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Post News</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="{{asset('admin/news')}}">News</a></li>
					<li class="active">Add</li>
				</ol>
			</div>
		</div>
	</div>
</div>
@include('backend.errors.errors')
<div class="col-lg-12">
	<form method="post" enctype="multipart/form-data" class="form-horizontal">
		
		<div class="card col-lg-12">
			<div class="card-header">
				<strong>Tiêu </strong> Đề
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
					<div class="col-12 col-md-9"><input type="text" id="partner name" name="prod_partner_name" placeholder="partner's name" class="form-control"></div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea delail product and  show cataloge</label></div>
				<div class="col-12 col-md-9"><textarea name="prod_detail" required="" id="textarea-input" rows="9" placeholder="Content..." value="" class="form-control ckeditor"></textarea></div>
			</div>
		</div>
		<div class="card col-lg-12">
			<div class="card-footer">
				<button type="submit" name="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-dot-circle-o"></i> Submit
				</button>
				<button type="reset" class="btn btn-danger btn-sm">
					<i class="fa fa-ban"></i> Reset
				</button>
			</div>
		</div>
		{{csrf_field()}}
	</form>
</div>

@section('script')
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/vendor/bootstrap-rating.min.js"></script>
<script src="assets/js/vendor/tooltip.min.js"></script>
<script type="text/javascript" src="../ck/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	var editor = CKEDITOR.replace('prod_detail',{
		language:'vi',
		filebrowserImageBrowseUrl: '../ck/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl: '../ck/ckfinder/ckfinder.html?Type=Flash',
		filebrowserImageUploadUrl: '../ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl: '../ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	});
</script>
@stop
@stop
