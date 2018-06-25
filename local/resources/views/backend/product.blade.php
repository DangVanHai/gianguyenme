@extends('backend.master')
@section('title','Products')
@section('main')
@section('header')

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/jquery-confirm.css">
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
					<li><a href="#">Admin</a></li>
					<li class="active">Products</li>
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
						<div class="row">
							<div class="col-md-2">
								<strong class="card-title">PRODUCTS-LIST</strong>
							</div>
							<div class="col-md-2 ml-auto">
								<button type="button" name="submit" class="btn btn-outline-primary btn-sm" ><a href="{{asset('admin/products/add')}}">Add product</a></button>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="3%" >#</th>
									<th width="16%">Name</th>
									<th width="10%">Code</th>
									<th width="5%">Qty</th>
									<th >image</th>
									<th width="8%">Price</th>
									<th width="12%">rate</th>
									<th width="5%">Quote</th>
									<th width="5%">Edit</th>
									<th width="5%">Del</th>
								</tr>
							</thead>
							<tbody>
								@foreach($prods as $prod)
								<tr>
									<td>{{$prod->prod_id}}</td>
									<td><a href="{{asset('admin/products/show/'.$prod->prod_id)}}">{{$prod->prod_name}}</a></td>
									<td>{{$prod->prod_code}}</td>
									<td>{{$prod->prod_qtyR}}</td>
									<td data-sortable="true">
										<span class="thumb"><img width="80px" height="150px" src="{{asset('public/images/products/'.$prod->prod_img)}}" /></span>
									</td>
									<td class="prod_pe">{{$prod->prod_pe}} đ</td>
									<td>
										<input value="{{$prod->prod_rate}}" disabled="" type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2"/>
									</td>					        
									<td>
										<a class="example-p-7-1"><span class="fa fa-shopping-cart" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
									<td>
										<a href="{{asset('admin/products/edit/'.$prod->prod_id)}}"><span class="fa fa-gavel" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
									<td>
										<a href="{{asset('admin/products/del/'.$prod->prod_id)}}"><span class="fa fa-times" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
								</tr>
								@endforeach
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
<!-- <script src="assets/js/vendor/jquery-2.1.4.min.js"></script> -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/jquery-confirm.js"></script>
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

		$('.example-p-7-1').on('click', function () {
			$.confirm({
				title: 'Alert!',
				content: 'Simple alert!',
			});
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
