@extends('main')
@section('main-content')
    <div class="toast" id="toast" >
        <div class="toast-body"  id="toast-body" >
 			<p></p>
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
@endsection
@section('script')
<script>
function addcart(id) {
			console.log(id)
			var product_id = $('.addcart #product_id').val();
			const toast = document.getElementById('toast');
			const toastbg = document.getElementById('toast-body');
				
			$.ajax({
				type: 'post',
				data: {
					product_id: id,
					quantity: 1,

					_token: "{{ csrf_token() }}"
				},
				
				url: "{{ url('cart-add') }}",
				
			 success: function (data) {
				if(data==1){
				toast.classList.add('visible');	
				toastbg.style.backgroundColor = 'lightgreen'
				toastbg.innerHTML = "Item Successfully Added To Cart ";		
				window.setTimeout(function() { 			
					toast.classList.remove('visible');
				}, 3000);
			}			
			else{
				toast.classList.add('visible');	
				toastbg.style.backgroundColor = 'yellow'
				toastbg.innerHTML = "Item Already Added To Cart ";		

				window.setTimeout(function() { 			
					toast.classList.remove('visible');
				}, 3000);0
			}
				},
			})
		}

		function addwhishlist(id) {
			console.log(id)
			var product_id = $('.addcart #product_id').val();
			const toast = document.getElementById('toast');
			const toastbg = document.getElementById('toast-body');
			$.ajax({
				type: 'post',
				data: {
					product_id: id,
					_token: "{{ csrf_token() }}"
				},
				url: "{{ url('whishlist-add') }}",
				
				success: function (data) {
					if(data==1){
				toast.classList.add('visible');	
				toastbg.style.backgroundColor = 'lightgreen'
				toastbg.innerHTML = "Item Successfully Added To Wishlist ";		
				window.setTimeout(function() { 			
					toast.classList.remove('visible');
				}, 3000);
			}			
			else{
				toast.classList.add('visible');	
				toastbg.style.backgroundColor = 'yellow'
				toastbg.innerHTML = "Item Already Added To Wishlist ";		

				window.setTimeout(function() { 			
					toast.classList.remove('visible');
				}, 3000);

			}
				},
			})
		}
		</script>
@endsection
	


