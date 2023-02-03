@extends('main')
@section('main-content')
    @if(count($data)>0)
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">My Whishlist</li>
				</ol>
			</div><!--/breadcrums-->
            @if (session('success'))
            <div class="alert alert-success wishsuccess" role="alert"  style="margin-left: 20%; margin-right: 20%; padding-left: 24%; ">
					<h4>Item Is Removed </h4>
			</div>
            @endif
			
			<div class="review-payment">
				<h2>My Whishlist</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<!-- <td class="image">Item</td> -->
							<td class="description">Name</td>
							<td class="description">Image</td>
							<td class="price">Price</td>
							<td class="price"></td>							

						</tr>
					</thead>	
                    <tbody>
						
					@foreach($data as $datas)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{url('eshopper/images/'.$datas->products->image)}}" alt="" width="100px" height="100px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="{{ url('product-detail/'.$datas->products->slug) }}">{{$datas->products->name}}</a></h4>
								<p>Web ID: 1089772</p>
								<p><a href="{{ url('product-detail/'.$datas->products->slug) }}">Product Info<i class="fa-light fa-circle-info"></i>  &#9432;</a></p>

							</td>
							<td class="cart_price">
								<input type="hidden" id="" value="">
								<p id="">&#8377;{{$datas->products->price}}</p>                                
							</td>				
							
							<td class="cart_delete">
                                <input type="hidden" value="$datas->id" id="whishlist_id">								
								<a href="{{url('whishlist-destroy/'.$datas->id)}}" class="cart_quantity_delete"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        @endforeach
						
					</tbody>			
				</table>
			</div>			
		</div>
	</section> 
    @else
    <div style="text-align: center;margin:5%; ">
				<h1 ><i class="fa fa-info-circle"></i> Wishlist Is Empty</h1>
				<a class="mb-10 btn btn-primary"  href="{{url ('/')}}">Return To Home</a>
				</div>
                @endif
   @endsection