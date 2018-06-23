@extends('backend.master')
@section('title','Products')
@section('main')
@section('header')

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-rating.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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
					<li><a href="#">Products</a></li>
					<li class="active">List</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- /dashboard -->

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">INFO-PRODUCTS</strong>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="5%" >#</th>
									<th width="15%">Name</th>
									<th width="15%">Code</th>
									<th width="5%">Qty</th>
									<th >image</th>
									<th width="12%">rating</th>
									<th width="5%">Edit</th>
									<th width="5%">Del</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Template</td>
									<td>TB2014</td>
									<td>12343</td>
									<td data-sortable="true">
										<span class="thumb"><img width="80px" height="150px" src="#" /></span>

									</td>
									<td>
										<input value="1" type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2"/>
									</td>					        
									<td>
										<a href="{{asset('bksensor/admin/product/edit')}}"><span class="fa fa-gavel" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>

									<td>
										<a href="#"><span class="fa fa-times" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .animated -->
</div><!-- .content -->
<div class="row lead">
	<div id="hearts" class="starrr"></div>
	You gave a rating of <span id="count">0</span> heart(s)
</div>
<!-- Right Panel -->

@section('script')
<!-- <script src="assets/js/vendor/jquery-2.1.4.min.js"></script> -->
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/bootstrap-rating.min.js"></script>
<script src="assets/js/vendor/tooltip.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
	$(document).ready(function(e) {
		$('#bootstrap-data-table-export').DataTable();
		console.log();
		$('.rating').rating({
			stop: 10,
			step: 2
		});
	});
	
	// function updateCart(quantity,rowId){
	// 	$.get(
	// 		'{{asset('shophaituan/cart/update')}}',
	// 		{quantity:quantity,rowId:rowId},
	// 		function(){
	// 			location.reload();
	// 		}
	// 		);

	// }

</script>
@stop
<!-- /script -->
@stop
