<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Shop | E-Shopper</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
	<link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" href="i{{ asset('mages/ico/apple-touch-icon-57-precomposed.png') }}">
	<style>
        .toast {
            position: fixed;
            bottom: 0;
            right: 0;
			z-index:1;
            transform: translateY(100%);
            opacity: 0;
            transition:
                opacity 500ms,
                transform 500ms;
        }
        .toast.visible {
            transform: translateY(0);
            opacity: 1;
        }

        .toast-body {
            margin: 28px;
            padding: 20px 24px;
            font-size: larger;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: lightgreen;
            color: darkblue;
            border-radius: 4px;
        }
    </style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href=""><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{url ('cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								@if (Auth::guest())
								<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								@else
								<li><a href="{{ route('signout') }}"><i class="fa fa-unlock"></i> Logout</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url ('/')}}">Home</a></li>
								<li class="dropdown"><a href="#" class="active">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="{{url ('products')}}" class="active">Products</a></li>
										<!-- <li><a href="product-details.html">Product Details</a></li> -->
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="{{ url('cart') }}" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
										@if (Auth::guest())
										<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
										@else
										<li><a href="{{ route('signout') }}"><i class="fa fa-unlock"></i> Logout</a></li>
										@endif
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="{{url ('search')}}" method="GET" enctype="multipart/form-data">
								
								<input type="text" placeholder="Search" name='search' />
								<button type="submit" class="btn btn-success" style="display: none;">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>	
    <div class="toast" id="toast">
        <div class="toast-body">
 			<p>Item Successfully Added To Cart</p>
        </div>
    </div>	
    <div class="toast" id="toast1">
        <div class="toast-body">
 			<p>Item Successfully Added To Wishlist</p>
        </div>
    </div>	
	

	<section id="advertisement">
		<div class="container">
			<img src="{{ asset('images/shop/advertisement.jpg') }}" alt="" />
		</div>
	</section>
				@if(session('success'))
				<div class="alert alert-success" role="alert" style="margin-left: 10%;margin-right:20%;">
					<h4>{{session('success')}}</h4>
				</div>
				@endif

				@if (session('unsuccess'))
				<div class="alert alert-danger" role="alert" style="margin-left: 10%;margin-right:20%;">
				<h4>{{session('unsuccess')}}</h4>
				</div>
				@endif
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($categories as $datas)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#{{$datas->name}}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$datas->name}}
										</a>
									</h4>
								</div>
								<div id="{{$datas->name}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											@foreach($sub_category as $data)
											@if($data->category_name==$datas->id)
											<li><a href="{{ url('category/'.$data->slug) }}">{{$data->name}} </a></li>
											@else
											<li style="display: none;"><a href="#"> </a></li>
											@endif
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							@endforeach

						</div><!--/category-productsr-->

						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brands as $data)
									<li><a href="{{ url('brand/'.$data->slug) }}"> <span class="pull-right"></span>{{$data->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
								<b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{ asset('images/home/shipping.jpg') }}" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@if(count($products) > 0)

						@foreach($products as $data)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">

										<img src="{{url('eshopper/images/'.$data->image)}}" alt="" />
										<h2>&#8377;{{$data->price}}</h2>
										<p>{{$data->name}}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>&#8377;{{$data->price}}</h2>
											<a href="{{ url('product-detail/'.$data->slug) }}">
												<p>{{$data->name}}</p>
											</a>
											<input type="hidden" value="{{$data->id}}" name="product_id" id="product_id">
											<button type="submit" class="add-to-cart" value="Add" onclick="addcart({{$data->id}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									<!-- <button type="submit" class="add-to-cart" value="Add" onclick="addwhishlist({{$data->id}})"><i class="fa fa-plus-square"></i>Add to wishlist</button>
									<button type="submit" class="add-to-cart" value="Add"><i class="fa fa-plus-square"></i>Add to compare</button> -->
										<li><button type="submit" class="add-to-cart" value="Add" onclick="addwhishlist({{$data->id}})"><i class="fa fa-plus-square"></i>Add to wishlist</button></li>
										<li><button type="submit" class="add-to-cart" value="Add"><i class="fa fa-plus-square"></i>Add to compare</button></li>
										<!-- <li><a href="" onclick="addwhishlist({{$data->id}})"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>
						@endforeach

						<div class="d-flex justify-content-center">
							{{$products->links()}}
						</div>
						@else
						<div>
							<h3 class="text-center text-danger">No Result Found</h3>
						</div>
						@endif


					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{ asset('images/home/iframe1.png') }}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{ asset('images/home/iframe2.png') }}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{ asset('images/home/iframe3.png') }}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{ asset('images/home/iframe4.png') }}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{ asset('images/home/map.png') }}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->
	<!-- <script>
        const toast = document.getElementById('toast');

        document.getElementById('showBtn').addEventListener('click', function() {
            // toast.querySelector('.toast-body').innerHTML = "Toast notification is working ...";
            toast.classList.add('visible');
        });
        document.getElementById('hideBtn').addEventListener('click', function() {
            toast.classList.remove('visible');
        });
    </script> -->
	<script>
		function addcart(id) {
			console.log(id)
			var product_id = $('.addcart #product_id').val();
			const toast = document.getElementById('toast');
			$.ajax({
				type: 'post',
				data: {
					product_id: id,
					quantity: 1,

					_token: "{{ csrf_token() }}"
				},
				url: "{{ url('cart-add') }}",
				
			 success: function (data) {
				toast.classList.add('visible');	

				window.setTimeout(function() { 			
					toast.classList.remove('visible');
				}, 3000);		
				},
			})
		}

		function addwhishlist(id) {
			console.log(id)
			var product_id = $('.addcart #product_id').val();
			const toast = document.getElementById('toast1');
			$.ajax({
				type: 'post',
				data: {
					product_id: id,
					_token: "{{ csrf_token() }}"
				},
				url: "{{ url('whishlist-add') }}",
				
				success: function (data) {
				toast.classList.add('visible');	

				window.setTimeout(function() { 			
					toast.classList.remove('visible');
				}, 3000);		
				},

			})
		}
		// window.setTimeout(function() {
        //     $(".toast").fadeTo(500, 0).slideUp(500, function() {
        //         $(this).remove();
        //     });
        // }, 3000);
	</script>
	



	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>