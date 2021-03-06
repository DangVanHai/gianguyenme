<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="{{asset('public/frontend')}}/">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

	<title>Laravel</title>

	
	<style>
	html, body {
		background-color: #fff;
		color: #636b6f;
		font-size: 14px;
		font-family: dejavu serif;
		font-weight: 100;
		height: 100vh;
		width:764px;
		margin: 10px;
	}
	/*.full-height {
		height: 100vh;
	}
	.flex-center {
		align-items: center;
		display: flex;
		justify-content: center;
	}
	.position-ref {
		position: relative;
	}
	.top-right {
		position: absolute;
		right: 10px;
		top: 18px;
	}
	.content {
		text-align: center;
		margin-top: 30px;
	}
	.title {
		font-size: 84px;
		}*/
		.links > a {
			color: #636b6f;
			/*padding: 0 25px;*/
			/*font-size: 12px;*/
			/*font-weight: 600;*/
			/*letter-spacing: .1rem;*/
			/*text-decoration: none;*/
		}
		.logo{
			padding-top: 22px;
		}
	</style>
	<SCRIPT language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length-3;//đếm số hàng
			var row = table.insertRow(rowCount);//thêm hàng vào vị trí sau đó

			var colCount = table.rows[0].cells.length;//đếm cột theo số ô 

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);
				if (i==0){
					newcell.innerHTML = table.rows[1].cells[i].innerHTML;//thêm giống hàng 1
				}
				if (i==1){
					newcell.innerHTML = rowCount+i-1;//thêm giống hàng 1
					newcell.style.textAlign = "center";
				}
				if(i!=0 && i!=1){
					var input = document.createElement("input");
					if (i==2) {
					input.type = "text";
					input.style.width = "auto";
					}
					if (i==3) {
				// 		 <select class="form-control" id="sel1">
    // <option>1</option>
    // <option>2</option>
    // <option>3</option>
    // <option>4</option>
					input.type = "select";
					input.option = "1";
					input.option = "2";
					input.style.width = "50px";
					}
					if (i==4) {
					input.style.width = "50px";
					}
					if (i==5) {
					input.style.width = "50px";
					}
					newcell.appendChild(input);//thêm giống hàng 1
				}
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
					newcell.childNodes[0].value = "";
					break;
					case "checkbox":
					newcell.childNodes[0].checked = false;
					break;
					case "select-one":
					newcell.childNodes[0].selectedIndex = 0;
					break;
				}
			}
		}

		function deleteRow(tableID) {
			try {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;

				for(var i=0; i<rowCount; i++) {
					var row = table.rows[i];
					var chkbox = row.cells[0].childNodes[0];
					if(null != chkbox && true == chkbox.checked) {
						if(rowCount <= 1) {
							alert("Cannot delete all the rows.");
							break;
						}
						table.deleteRow(i);
						rowCount--;
						i--;
					}
				}
			}catch(e) {
				alert(e);
			}
		}

	</SCRIPT>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="logo">
					<img src="{{asset('public/frontend/img/logo-gianguyenme.png')}}">
				</div>
			</div>
			<div class="col-sm-10">
				<div class="links">
					<b>TRỤ SỞ CHÍNH:</b>
					<p>Số nhà 20, nghách 1 ngõ 200, Đ.Vĩnh Hưng, P.Vĩnh Hưng, Q.Hoàng Mai, Hà Nội, Việt Nam.</p>
				</div>
				<div class="links">
					<b>VPGD:</b> <br>
					<a href="https://goo.gl/maps/14HCSVTKxdS2">Số nhà 89A, ngõ 49, Đ.Thúy Lĩnh, P.Lĩnh Nam, Q.Hoàng Mai, Hà Nội, Việt Nam.</a>
					<p>ĐT: +842462542821 ,Mobile: +84915505105 </p>
					<p>Email: hien.gianguyen.me@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			<table class="table">
				<thead>
					<tr class="info">
						<th colspan= "2" style="text-align: center;">BÁO GIÁ / QUOTATION</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Người gửi / From: Gia Nguyen M&E JSC</td>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Người nhận/To:</span>
								<input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
							</div>
						</td>
					</tr>  
					<tr>
						<td>Ngày tháng /Date:04.07.2018</td>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Đại diện/Attn:</span>
								<input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
							</div>
						</td>
					</tr>
					<tr>
						<td>HP: (+84)915-505-105</td>
						<td>
							<div class="input-group">
								<span class="input-group-addon">ĐT/HP:</span>
								<input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
							</div>
						</td>
					</tr> 
					<tr>
						<td>Email: hien.gianguyen.me@gmail.com</td>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Email:</span>
								<input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
							</div>
						</td>
					</tr> 
					<tr>
						<td>Số/No:  04072018PH/GN</td>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Dự án /Project: </span>
								<input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
							</div>
						</td>
					</tr>  
					<tr>
						<td colspan= "2" style=" text-transform: uppercase;">Chi tiết bao giá ( Detailed quotes )</td>
					</tr>      
				</tbody>
			</table>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

			<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />

			<INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
			<button style="float: right;" type="submit" class="btn btn-success">Xem Trước</button>
			<table id="dataTable" class="table table-bordered table-striped">
				<thead>
					<tr style=" text-transform: uppercase;" class="info">
						<th width="5%">Del</th>
						<th width="5%">No</th>
						<th width="35%">Descriptions</th>
						<th width="5%">Unit</th>
						<th width="5%">Q'ty</th>
						<th width="15%">Origin</th>
						<th width="15%">U.Price(VND)</th>
						<th width="15%">Amount(VND)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><INPUT type="checkbox" name="chk"/></td>
						<td style="text-align: center;">1</td>
						<td>Nguồn 1 chiều 24VDC, 30W</td>
						<td>Cái</td>
						<td>1</td>
						<td>Idec</td>
						<td>50.000.000</td>
						<td>50.000.000</td>
					</tr>
					<tr style=" text-transform: uppercase; font-weight:bold;" >
						<td colspan= "7" >Tổng trước thuế ( Total not AVT )</td>
						<td>50.000.000</td>
					</tr>
					<tr style=" text-transform: uppercase; font-weight:bold;" >
						<td colspan= "7" >10 % VAT</td>
						<td>5.000.000</td>
					</tr>
					<tr style=" text-transform: uppercase; font-weight:bold;" >
						<td colspan= "7" >Tổng giá trị sau thế ( Total Inclusive VAT)</td>
						<td>55.000.000</td>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

			<div class="alert alert-warning">
				<b style=" text-transform: uppercase;">Ghi chú ( Note ):</b>
				<p><strong>Thời gian giao hàng ( Delivery time ): </strong>Giao hàng trong vòng 2-5 ngày kể từ khi nhận được xác nhận đặt hàng và tiền tạm ứng
				( The goods will be delivered in Hanoi within 2-5 days after receipt of your order ).</p>
				<p><strong>Thời gian bảo hành ( Guarante ): </strong>Bảo hành 1 năm đối với các lỗi của nhà sản xuất kể từ ngày giao hàng ( Within one year for the 
				faults due to the manufacturer ).</p>
				<p><strong>Điều khoản thanh toán ( Payment term ): </strong>Thanh toán 100% trước khi giao hàng ( 100% before the date of delivery ).</p>
				<p class="alert alert-danger"><strong>Số tài khoản VNĐ ( Account No VNĐ): <br>
					- 170214851010840 Eximbank - Branch HaiBaTrung Hanoi-Vietnam. <br>  
					- 054.1.00.025584.3 Vietcombank - Branch ChuongDuong Hanoi - vietnam. <br>
					Tài khoản USD ( Foreign currency accounts ): <br>
				- EBVIVNVXHBT-170214851011091 Eximbank - Branch HaiBaTrung Hanoi-Vietnam. </strong></p>
				<p><strong>Địa điểm giao hàng ( Place of delivery ): </strong>Tại kho bên bán. 89A, Ngõ 49, Thúy Lĩnh, Lĩnh Nam, Hà nội.</p>
				<p><strong>Hiệu lực báo giá ( Validity ): </strong>Báo giá có giá trị trong vòng 30 ngày ( Quotation valids to 30 day for the amount quoted ).</p>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

			<div class="panel panel-default">
				<div class="panel-heading"><p style=" text-transform: uppercase;text-align: center; font-weight: bold;">Ký xác nhận báo giá</p></div>
				<div class="col-sm-6 panel-body">GIA NGUYEN M&E JSC
					( Signed) <br>
					<img src="{{asset('public/images/avatar/dvhsign.png')}}">
				</div>
				<div class="col-sm-6 panel-body">THE CUSTOMER 
				( Signed order confirmation)</div>
			</div>
		</div>
		</div>
	</div>
</body>

	<!-- <div class="row">
				<div class="content">
					<div class="title m-b-md">
					</div>
					<div class="links">
						<a href="https://laravel.com/docs">Documentation</a>
						<a href="https://laracasts.com">Laracasts</a>
						<a href="https://laravel-news.com">News</a>
						<a href="https://forge.laravel.com">Forge</a>
						<a href="https://github.com/laravel/laravel">GitHub</a>
					</div>
				</div>
			</div> -->