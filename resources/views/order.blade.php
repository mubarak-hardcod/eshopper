@extends('main')
@section('main-content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">My Order</li>
				</ol>
			</div><!--/breadcrums-->
			@if(session('success'))
			<div class="alert alert-success" role="alert" style="margin-left: 10%;margin-right:20%;">
				<h4>{{session('success')}}</h4>
			</div>
			@endif


			<div class="review-payment">
				<h2>My Order List</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<!-- <td class="image">Item</td> -->
							<td class="description">Order </td>
							<td class="status">Order Date</td>
							<td class="price">Payment</td>
							<td class="quantity">Total</td>
							<td class="total">Status</td>
							<td class="total">Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($order as $data)
						<tr>
							<td>

								<p>Order ID: {{$data->cus_order_id}}</p>
								<!-- <p><a href="">Order Info<i class="fa-light fa-circle-info"></i>  &#9432;</a></p> -->
							</td>
							<td class="">
								<p class="" id="">{{$data->created_at->format('d-m-Y')}} </p>
							</td>

							<td class="">
								<p class="" id="">{{$data->payment_option}} </p>
							</td>
							<td class="">
								<p class="" id="">&#8377;{{$data->final_total}} </p>
							</td>
							<td class="">
								<p class="" id="">{{$data->status}} </p>
							</td>
							<td class="">
								<form id="cancel-form-{{ $data->id }}" method="post" action="{{ url('order-cancel/'.$data->id) }}" style="display: none">
									{{ csrf_field() }}
									{{ method_field('POST') }}
								</form>
								<p class="" id=""><a href="{{ url('generate-invoice/'. $data->id)}}">View Invoice</a> |
								@if($data->status!=="Cancelled")
								<a href="" onclick=" if(confirm('Are you sure, You Want to delete this?'))
                          		{
                           		 event.preventDefault();
                            	document.getElementById('cancel-form-{{ $data->id }}').submit();
                         		 }
                         		 else{
                          	  	event.preventDefault();
                          		}" value="{{$data->id}}">Cancel</a>@else <a  style=" pointer-events: none; color:grey;">Cancel</a>
	@endif							
								</p>
							</td>


						</tr>
						@endforeach

					</tbody>
				</table>
			</div>

		</div>
	</section> <!--/#cart_items-->
	@endsection


