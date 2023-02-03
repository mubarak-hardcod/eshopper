@extends('main')
@section('main-content')
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
									@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
									<!-- <input type="text" placeholder="Title"> -->
									<input type="text" placeholder="First Name *" name="first_name" id="first_name">
									@if ($errors->has('first_name'))
									<span class="text-danger">{{ $errors->first('first_name') }}</span>
									@endif
									<input type="text" placeholder="Middle Name" name="middle_name" id="middle_name">
									<input type="text" placeholder="Last Name *" name="last_name" id="last_name">
									@if ($errors->has('last_name'))
									<span class="text-danger">{{ $errors->first('last_name') }}</span>
									@endif
									<input type="text" placeholder="Address 1 *" name="address_1" id="address_1">
									@if ($errors->has('address_1'))
									<span class="text-danger">{{ $errors->first('address_1') }}</span>
									@endif
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
									@if ($errors->has('phone'))
									<span class="text-danger">{{ $errors->first('phone') }}</span>
									@endif
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

	@endsection
	@section('script')
	
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
				success: function (data) {
				window.location = '{{ url('order') }}';
				},

			})
		}
	</script>
@endsection