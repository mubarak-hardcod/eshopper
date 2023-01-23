<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
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
								<li><a href="{{ url ('cart')}}" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								@if (Auth::guest())
								<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								@else
								<li><a  href="{{ route('signout') }}"><i class="fa fa-unlock"></i> Logout</a></li>								
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
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url ('/')}}">Products</a></li>
										<li><a href="{{ url ('cart')}}" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								@if (Auth::guest())
								<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								@else
								<li><a  href="{{ route('signout') }}"><i class="fa fa-unlock"></i> Logout</a></li>								
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
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form>
								<input type="text" placeholder="Display Name">
								<input type="text" placeholder="User Name">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
							</form>
							<a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Continue</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Customer Name" name="customer_name" id="customer_name">
									<input type="text" placeholder="Email*" name="email" id="email">
									<!-- <input type="text" placeholder="Title"> -->
									<input type="text" placeholder="First Name *" name="first_name" id="first_name">
									<input type="text" placeholder="Middle Name" name="middle_name" id="middle_name">
									<input type="text" placeholder="Last Name *" name="last_name" id="last_name">
									<input type="text" placeholder="Address 1 *" name="address_1" id="address_1">
									<input type="text" placeholder="Address 2" name="address_2" id="address_2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Zip / Postal Code *">
									<select name="country" id="country">
										<option>-- Country --</option>
										<option>United States</option>										
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>										
										<option>Dubai</option>
									</select>
									<select name="state" id="state">
										<option>-- State / Province / Region --</option>
										<option>United States</option>										
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>									
										<option>Dubai</option>
									</select>
									<!-- <input type="password" placeholder="Confirm password"> -->
									<input type="text" placeholder="Phone *" name="phone" id="phone">
									<input type="text" placeholder="Mobile Phone" name="mobile_phone" id="mobile_number">
									<input type="text" placeholder="Fax" name="fax" id="fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16" name="message" id="message"></textarea>
							<!-- <label><input type="checkbox"> Shipping to bill address</label> -->
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php $sum_tot_Price = 0; ?>
				

					
						@foreach($datas as $data)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{url('eshopper/images/'.$data->products->image)}}" alt="" width="100px" height="100px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$data->products->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<input type="hidden" id="price1_{{$data->id}}" value="{{$data->products->price}}" >
								<p id="price_{{$data->id}}">&#8377; {{$data->products->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down" onclick="decrementValue({{$data->id}})" value="-"> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$data->quantity}}" autocomplete="off" id="number_{{$data->id}}" size="2">
									<a class="cart_quantity_up" onclick="incrementValue({{$data->id}})" value="+"> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price" id="price_total_{{$data->id}}">&#8377;{{$data->products->price*$data->quantity}}</p>															
								<?php $sum_tot_Price += $data->products->price * $data->quantity; ?>
								<input type="hidden" value="{{$sum_tot_Price}}" id="totalprices">							
								
							</td>
							<td class="cart_delete">								
								<a href="{{url('cart-destroy/'.$data->id)}}" class="cart_quantity_delete"><i class="fa fa-times"></i></a>


							</td>
						</tr>

						@endforeach


						
						


						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result"  id="myTable">
									<tr>
										<td>Cart Sub Total</td>
										<td  >&#8377; <span id="">{{ $sum_tot_Price}}</span></td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td id="">&#8377; 150</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td id="">Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td id=""><span>&#8377;{{ $sum_tot_Price + 150}}</span></td>
									</tr>
								</table>
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox" disabled> Bank Transfer</label>
					</span>
					<span>
						<input type="hidden" id="payment_option" value="Cash On Delivery">
						<label><input type="checkbox" name="payment_option"  id=""> Cash On Delivery</label>
					</span>
					<span>
						<label><input type="checkbox" disabled> Paypal</label>
					</span>
					<span>
						<button class="btn  btn-success " style="margin-left: 52%;" onclick="orderplaced({{$datas}})"> ORDER</button>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

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
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		<input type="hidden" value="{{ $sum_tot_Price}}" id="sub_total">
		<input type="hidden" value="150" id="tax">
		<input type="hidden" value="Free" id="shipping_fee">
		<input type="hidden" value="{{ $sum_tot_Price + 150}}" id="final_total">


		
	</footer><!--/Footer-->
	
	<script>
		function incrementValue(cart_id) {

			var cartid = 'number_' + cart_id;
			var cartprice = 'price1_' + cart_id;
			var carttotatal = 'price_total_' + cart_id;
			var value = parseInt(document.getElementById(cartid).value, 10);
			var price1 = document.getElementById(cartprice).value;
					
			value = isNaN(value) ? 0 : value;
			if (value < 10) {
				value++;
				document.getElementById(cartid).value = value;		}

			var total = value * price1;
			var totalAmount =document.getElementById('totalprices').value;
			var FinalAmount = parseInt(price1) + parseInt( totalAmount);
			document.getElementById('totalprices').value = FinalAmount;

			console.log('price1== ',price1);
			console.log('FinalAmount== ',FinalAmount);	

			$.ajax({
				type: 'post',
				data: {
					cart_id: cart_id,
					item_quantity: value,
					_token: "{{ csrf_token() }}"
				},
				url: "{{ url('cart-update') }}",
				success: function(data) {
					location.reload();
					document.getElementById(carttotatal).innerHTML = '{{DEFAULT_CURRENCY}}' + total;
				}
			})
		}
		function decrementValue(cart_id) {
            var cartid = 'number_' + cart_id;
            var cartprice = 'price1_' + cart_id;
            var carttotatal = 'price_total_' + cart_id;
            var value = parseInt(document.getElementById(cartid).value, 10);
            var price1 = document.getElementById(cartprice).value;
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                document.getElementById(cartid).value = value;
            }
            var total = value * price1;
			var totalAmount =document.getElementById('totalprices').value;
			var FinalAmount = parseInt(price1) - parseInt( totalAmount);
			document.getElementById('totalprices').value = FinalAmount;

			console.log('price1== ',price1);
			console.log('FinalAmount== ',FinalAmount);
            $.ajax({
                type: 'post',
                data: {
                    cart_id: cart_id,
                    item_quantity: value,
                    _token: "{{ csrf_token() }}"
                },
                url: "{{ url('cart-update') }}",
                success: function(data) {
					location.reload();
                    document.getElementById(carttotatal).innerHTML = '{{DEFAULT_CURRENCY}}' + total;
                }

            })

        }

		function itemdelete(id) {
			// var id=document.getElementById('item').value;	
			console.log("ssss", id);
			$.ajax({
				type: 'post',
				data: {
					id: id,
					_token: "{{ csrf_token() }}"
				},
				url: "{{ url('cart-destroy') }}",

			})
		}

		function orderplaced(product_details) {

			console.log("check",product_details);
			var customer_name=document.getElementById('customer_name').value;
			var email=document.getElementById('email').value;
			var first_name=document.getElementById('first_name').value;	
			var middle_name=document.getElementById('middle_name').value;
			var last_name=document.getElementById('last_name').value;
			var address_1=document.getElementById('address_1').value;
			var address_2=document.getElementById('address_2').value;	
			var country=document.getElementById('country').value;
			var state=document.getElementById('state').value;	
			var phone=document.getElementById('phone').value;
			var mobile_number=document.getElementById('mobile_number').value;
			var fax=document.getElementById('fax').value;	
			var message=document.getElementById('message').value;			
			var sub_total=document.getElementById('sub_total').value;
			var tax=document.getElementById('tax').value;	
			var shipping_fee=document.getElementById('shipping_fee').value;
			var final_total=document.getElementById('final_total').value;	
			// var payment_option=document.getElementById('payment_option').value;	

			$.ajax({
				
				type: 'post',
				data: {
					customer_name: customer_name,					
					email:email,
					first_name:first_name,
					last_name:last_name,
					middle_name:middle_name,
					address_1:address_1,
					address_2:address_2,
					country:country,
					state:state,
					phone:phone,
					mobile_number:mobile_number,
					fax:fax,
					message:message,
					sub_total:sub_total,
					tax:tax,
					shipping_fee:shipping_fee,
					final_total:final_total,
					product_details:product_details,					
					_token: "{{ csrf_token() }}"
				},
				
				url: "{{ url('orderplace') }}",

			})
		}
	</script>

    <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>