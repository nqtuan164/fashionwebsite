<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Product details</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.css.map">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<!-- LOGO -->
<div id="header" class="row">
	<div id="logo" class="container">
		<a href="#">
			<img id="img-logo" class="img-responsive" src="img/logo.png" height="94" width="268" alt="">
		</a>
	</div>
</div>
<!-- END of LOGO -->
<!-- MENU -->
<div id="menu">
	<div class="nav-menu">
		<nav class="navbar container navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Trang Chủ</a>
			</div>
			<div id="main-menu" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Thời Trang Nam</a></li>
					<li><a href="#">Thời Trang Nữ</a></li>
					<li><a href="#">Liên Hệ</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- END of MENU -->
<!-- MAIN CONTENT -->
<div id="main-content" class="row">
	<div class="container">
		<div class="col-md-12 col-xs-12 nopadding hidden-xs">
			<ul class="breadcrumb-details">
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="#">Thời trang nữ</a></li>
				<li><a href="#">Váy màu trắng bi</a></li>
			</ul>
		</div>

<div class="col-md-12 col-xs-12 product-details">
	<!-- PRODUCT DETAILS -->
	<div class="col-md-4 col-xs-12 product-details-img">
		<div class="col-md-12 col-xs-12 product-content product-details-main-img">
			<a class="product-img col-md-12 nopadding" href="#">
				<img src="img/product1.jpg" height="348" width="980" alt="" class="img-responsive" data-toggle="modal" data-target="#main-product-img">
			</a>

		</div>
		<div class="col-md-6 col-xs-6 product-content">
			<a class="product-img col-md-12 col-xs-12 nopadding" href="#">
				<img src="img/product1.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#sub-product-img1">
			</a>

		</div>
		<div class="col-md-6 col-xs-6 product-content">
			<a class="product-img col-md-12 col-xs-12 nopadding" href="#">
				<img src="img/product1.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#sub-product-img2">
			</a>

		</div>

	</div>
	<!-- END of PRODUCT DETAILS -->

	<!-- PRODUCT DETAILS INFO -->
	<div class="col-md-8 col-xs-12 product-details-info">
		<div class="col-md-12 product-info">
			<h1 class="text-uppercase">Váy màu trằng bi</h1>
			<h5>500.000VND</h5>
			<span><b>Size:</b>  S, M, XL</span>
		</div>
		<div class="col-md-12 product-content product-details-article">
			<p>
				Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies, such as the aria-label, aria-labelledby or title attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods is not advised.<br/><br/>
				Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies, such as the aria-label, aria-labelledby or title attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods is not advised.Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies
			</p>
		</div>
		<div class="col-md-12 product-details-rating">
			<ul class="list-inline ">
				<li><h5>Đánh giá sản phẩm:</h5></li>
				<li><span class="glyphicon glyphicon-star"></span></li>
				<li><span class="glyphicon glyphicon-star"></span></li>
				<li><span class="glyphicon glyphicon-star"></span></li>
				<li><span class="glyphicon glyphicon-star"></span></li>
				<li><span class="glyphicon glyphicon-star"></span></li>
			</ul>
			<ul class="list-unstyled product-details-address">
				<li><b><h5>Liên hệ mua hàng:</h5></b></li>
				<li><b>Địa Chỉ:</b> 31 Lê Minh Xuân , Phường 7 , Quận Tân Bình</li>
				<li><b>Điện thoại:</b> (08) 39716863 / (08) 39712566 / (08)39712656 / 0949999305</li>
			</ul>
		</div>
	</div>
	<!-- END of PRODUCT DETAILS INFO -->

	<!-- LAUNCH MODAL	 -->
	<div class="modal fade" id="main-product-img" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">VÁY MÀU TRẮNG BI</h4>
				</div>
				<div class="modal-body">
					<img src="img/product1.jpg" height="348" width="980" alt="" class="img-responsive">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="sub-product-img1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">VÁY MÀU TRẮNG BI</h4>
				</div>
				<div class="modal-body">
					<img src="img/product1.jpg" height="348" width="980" alt="" class="img-responsive">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="sub-product-img2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">VÁY MÀU TRẮNG BI</h4>
				</div>
				<div class="modal-body">
					<img src="img/product1.jpg" height="348" width="980" alt="" class="img-responsive">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- END of MAIN CONTENT -->
<!-- FOOTER -->
<div id="footer" >

<hr>
<div class="footer-content container nopadding">
	
	<div class="col-md-6 footer-address nopadding">
		<img class="img-responsive" src="img/logo-2.png" alt="">
		<ul class="list-unstyled">
			<li><b>Địa Chỉ:</b>31 Lê Minh Xuân , Phường 7 , Quận Tân Bình</li>
			<li><b>Điện thoại:</b>(08) 39716863 / (08) 39712566 / (08)39712656 / 0949999305</li>
		</ul>
	</div>
	<div class="col-md-6 footer-social pull-right nopadding">
		<h4 class="col-md-12 nopadding"><i class="pull-right ">Thương hiệu thời trang uy tín hàng đầu Việt Nam</i></h4>
		<ul class="list-inline pull-right">
			<li><a href=""><span class="glyphicon glyphicon-heart"></span></a></li>
			<li><a href=""><span class="glyphicon glyphicon-heart"></span></a></li>
			<li><a href=""><span class="glyphicon glyphicon-heart"></span></a></li>
		</ul>
	</div>
</div>
</div>
<!-- END of FOOTER -->	
</body>
</html>