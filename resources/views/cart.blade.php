@extends('main')
@section('main-content')
	<?php $sum_tot_Price = 0; ?>
	@if(count($datas) > 0)

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shopping Cart</li>
				</ol>
			</div>
			@if (session('success'))
            <div class="alert alert-success wishsuccess" role="alert"  style="margin-left: 20%; margin-right: 20%; padding-left: 24%; ">
					<h4>{{session('success')}}</h4>
			</div>
            @endif
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
								<input type="hidden" id="price1_{{$data->id}}" value="{{$data->products->price}}">
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
						


					</tbody>
				
				</table>
				
				
			
			</div>
		</div>
	</section>
	 <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li id="total">Cart Sub Total <span> &#8377;{{ $sum_tot_Price}}</span></li>
							<li>Eco Tax <span>&#8377; 150</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>&#8377;{{ $sum_tot_Price + 150}}</span></li>

						</ul>
					

						<!-- <a class="btn btn-default update" href="">Update</a> -->
						<a class="btn btn-default check_out" href="{{url ('checkout')}}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	@else

	<div style="text-align: center;margin:5%; ">
	<h1 ><i class="fa fa-info-circle"></i> Cart Is Empty</h1>
				<a class="mb-10 btn btn-primary" href="{{url ('/')}}">Return To Home</a>
				</div>
	@endif

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
				document.getElementById(cartid).value = value;}
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
		window.setTimeout(function() {
			$(".alert").fadeTo(300, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 3000);
	</script>
	@endsection