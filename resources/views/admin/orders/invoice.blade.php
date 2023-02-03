<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>
</head>
<body>


  <div>
  <h2>Billing To</h2>
{{$orders->cus_order_id}} <br>
{{$orders->customer_name}}<br>
{{$orders->email}}<br>
{{$orders->address_1}}<br>
{{$orders->address_2}}<br>
{{$orders->state}}<br>
{{$orders->country}}<br>
{{$orders->phone}}<br>
  </div> 
<!-- <?php $sum_tot_Price = 0; ?>
@foreach($order_info as $data)
<p>{{$data->products->name}}</p>
<p>&#8377; {{$data->products->price}}</p>
<p>{{$data->quantity}}</p>
<p>&#8377;{{$data->products->price*$data->quantity}}</p>
<?php $sum_tot_Price += $data->products->price * $data->quantity; ?>
<input type="hidden" value="{{$sum_tot_Price}}" id="totalprices">							
@endforeach -->






<div class="container-fluid mt-3">
      
 
  <table style="width:100%">
 
  <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr> 
  @foreach($order_info as $data) 
   <tr>

    <td>{{$data->products->name}}</td>
    <td>&#8377; {{$data->products->price}}</td>
    <td>{{$data->quantity}}</td>
    <td>&#8377;{{$data->products->price*$data->quantity}}</td>
  </tr>
  <?php $sum_tot_Price += $data->products->price * $data->quantity; ?>
        <!-- <input type="hidden" value="{{$sum_tot_Price}}" id="totalprices">							 -->
        @endforeach 
</table>
<div class="" style="margin-left: 44%;">
<table style="width:100%">
  <tr>
    <th>sub total</th>
    <td>{{ $sum_tot_Price}}</td>
  </tr>
  <tr>
    <th>Tax</th>
    <td>&#8377;150</td>
  </tr>
  <tr>
    <th>Shipping Cost </th>
    <td> Free</td>
  </tr>
  <tr>
    <th>Total</th>
    <td>&#8377;{{ $sum_tot_Price + 150}}</td>
  </tr>

</table>
</div>


</div>

</body>
</html>

