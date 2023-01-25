@extends('admin.head')
@section('content')

<div class="container mt-4">
    <div class="row">
        <h3>Orders Detail</h3>

        <a class="btn btn-primary mb-3 " href="{{ url('orders_manage/')}}" role="button" style="margin-left:80%;">Back </a>

        <table class="table table-bordered">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td><b>Id</b></td>
                    <input type="hidden" value="{{$data->id}}" id="order_id">
                    <td colspan="2">{{$data->id}}</td>
                </tr>
                <tr>
                    <td><b> Customer Id</b> </td>
                    <td colspan="2">{{$data->customer_id}}</td>
                </tr>
                <tr>
                    <td><b>Customer Name</b></td>
                    <td colspan="2">{{$data->customer_name}}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td colspan="2">{{$data->email}}</td>
                </tr>
                <tr>
                    <td><b>First Name</b></td>
                    <td colspan="2">{{$data->first_name}}</td>
                </tr>
                <tr>
                    <td><b>Middle Name</b></td>
                    <td colspan="2">{{$data->middle_name}}</td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td colspan="2">{{$data->last_name}}</td>
                </tr>
                <tr>
                    <td><b>Address 1</b></td>
                    <td colspan="2">{{$data->address_1}}</td>
                </tr>
                <tr>
                    <td><b>Address 2</b></td>
                    <td colspan="2">{{$data->address_2}}</td>
                </tr>

                <tr>
                    <td><b>Country</b></td>
                    <td colspan="2">{{$data->country}}</td>
                </tr>

                <tr>
                    <td><b>State</b></td>
                    <td colspan="2">{{$data->state}}</td>
                </tr>
                <tr>
                    <td><b>Phone</b></td>
                    <td colspan="2">{{$data->phone}}</td>
                </tr>
                <tr>
                    <td><b>Mobile Number</b></td>
                    <td colspan="2">{{$data->mobile_number}}</td>
                </tr>
                <tr>
                    <td><b>Fax</b></td>
                    <td colspan="2">{{$data->fax}}</td>
                </tr>
                <tr>
                    <td><b>Message</b></td>
                    <td colspan="2">{{$data->message}}</td>
                </tr>
                <tr>
                    <td><b>Sub Total</b></td>
                    <td colspan="2">{{$data->sub_total}}</td>
                </tr>
                <tr>
                    <td><b>Tax</b></td>
                    <td colspan="2">{{$data->tax}}</td>
                </tr>
                <tr>
                    <td><b>Shipping Fee</b></td>
                    <td colspan="2">{{$data->shipping_fee}}</td>
                </tr>
                <!-- <tr>
                    <td><b>status</b></td>
                    <td colspan="2">{{$data->status}}</td>                    
                </tr> -->
                <tr>
                    <td><b>Final Total</b></td>
                    <td colspan="2">{{$data->final_total}}</td>
                </tr>
                <tr>
                    <td><b>Payment Option</b></td>
                    <td colspan="2">{{$data->payment_option}}</td>
                </tr>
                <tr>
                    <td><b>Created at</b></td>
                    <td colspan="2">{{$data->created_at}}</td>
                </tr>
                <tr>
                    <td><b>Updated at</b></td>
                    <td colspan="2">{{$data->updated_at}}</td>
                </tr>
                <tr>
                    <td colspan="1"><b> Product Info </b></td>

                    <td colspan="2">status Change:                     

                        <select class="form-control" data-placeholder="Select a Status" style="width: 50%;" aria-hidden="true" name="status" id="orderstatus">
                            @foreach($order_status as $status)
                            <option value="{{$status->name}}" @if ($data->status == $status->name) selected  @endif >{{$status->name}}</option>
                            @endforeach
                            </select> 
                    </td>

                </tr>
                <tr>
                    <td><b>Product Name</b></td>
                    <td><b>Quantity</b></td>
                    <td><b>Price</b></td>

                </tr>
                @foreach($datas1 as $product_info)
                <tr>
                    <td>{{$product_info->products->name}} </td>
                    <td>{{$product_info->quantity}}</td>
                    <td>{{$product_info->price}}</td>
                </tr>
                @endforeach




            </tbody>
        </table>
    </div>
</div>
@endsection