<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('public/frontend')}}/">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	@yield('header')
	<link type="text/css" rel="stylesheet" href="css/style.css"/>


	<title>BKsensor | @yield('title')</title>

	<!-- Google font -->

</head>
<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +091-87-68-74</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> bksensors@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 49 ThuyLinh HaNoi</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> VND</a></li>
					<li><a href="#"><i class="fa fa-user-o"></i> Tài Khoản</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="{{asset('/')}}" class="logo">
								<img src="./img/logo.png" alt="bksensors-logo">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form method="get" action="{{asset('')}}">
								<select name="cate" class="input-select">
									<option value="0">Tất cả</option>
									@foreach($cate_parents as $cate_parent)
									<option value="{{$cate_parent->cate_id}}">{{$cate_parent->cate_name}}</option>
									@endforeach
								</select>
								<input class="input" placeholder="Search here" name="search"  value="">
								<button type="submit" name="submit" class="search-btn">Kìm Kiếm</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Báo Giá</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav" class="menu">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					@foreach($cate_parents as $cate_parent)
					<li><a href="{{asset('/'.$cate_parent->cate_name)}}">{{$cate_parent->cate_name}}</a>
						@if($cate_parent->cate_main =="parents")
						<ul>
							@foreach($cate_childrens as $cate_children)
							@if($cate_children->cate_level == $cate_parent->cate_id)
							<li><a href="{{asset('/'.$cate_children->cate_name)}}">{{$cate_children->cate_name}}</a></li>
							@endif
							@endforeach
						</ul>
						@endif
					</li>
					@endforeach
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->
	@yield('main')
	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Đăng ký để nhận <strong>BẢN TIN</strong></p>
						<form>
							<input class="input" type="email" placeholder="Nhập Email Của Bạn">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> ĐĂNG KÝ</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>BKsensor công ty thương mại chuyên cung cấp các thiết bị công nghệ cao.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>49 ThuyLinh HaNoi</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+091-87-68-74</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>bksensors@email.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Danh Mục</h3>
							<ul class="footer-links">
								@foreach($cate_parents as $cate_parent)
								<li><a href="{{$cate_parent->cate_name}}">{{$cate_parent->cate_name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Thông Tin</h3>
							<ul class="footer-links">
								<li><a href="#">Chúng Tôi</a></li>
								<li><a href="#">Liên Hệ</a></li>
								<li><a href="#">Bảo Hành</a></li>
								<li><a href="#">Đợn Đặt Hàng và Hòn Trả</a></li>
								<li><a href="#">Điều Khoản Và Điều Kiện</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Dịch Vụ</h3>
							<ul class="footer-links">
								<li><a href="#">Tài Khoản Của bạn</a></li>
								<li><a href="#">Xem Báo Giá</a></li>
								<li><a href="#">Bảng Tin</a></li>
								<li><a href="#">Trợ Giúp</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BKsensor</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->

	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript">

		$('.menu > ul').superfish({ 
			delay:       100,                           
			animation:   {opacity:'show', height:'show'}, 
			speed:       'fast',
			arrowClass: false,
			autoArrows:  true
		});
	</script>
	@yield('script')
	
</body>
</html>
