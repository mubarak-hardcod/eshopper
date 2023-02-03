@extends('admin.head')
@section('content')
<div class="container mt-3">
    @if(session('success'))
    <div class="alert alert-info">
    <h5>{{session('success')}}</h5>
    </div>
    @endif        
    @if(session('unsuccess'))
                    <div class="alert alert-danger">
                        <h5>{{session('unsuccess')}}</h5>
                    </div>
                    @endif      
    <div class="row">   
        <h3>Orders Manage</h3>
        <table id="example1" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Payment Option</th>
                    <th scope="col">Status</th>                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{$data->customer_id}}</td>
                    <td>{{$data->cus_order_id}}</td>
                    <td> &#8377;{{$data->final_total}}</td>
                    <td>{{$data->payment_option}}</td>
                    
                    <td>{{$data->status}}</td>          
                 
                    <td><a href="{{ url('orders_detail/'. $data->id)}}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('generate-invoice/'. $data->id)}}" class="btn btn-success btn-sm">Export</a>                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection