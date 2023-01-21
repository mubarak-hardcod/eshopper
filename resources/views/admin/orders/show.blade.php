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
                    <td>id</td>
                    <td>{{$data->id}}</td>                    
                </tr>
                <tr>
                    <td>Customer Id</td>
                    <td>{{$data->customer_id}}</td>                    
                </tr>
                <tr>
                    <td>Customer Name</td>
                    <td>{{$data->customer_name}}</td>                    
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$data->email}}</td>                    
                </tr>  
                <tr>
                    <td>First  Name</td>
                    <td>{{$data->first_name}}</td>                    
                </tr> 
                <tr>
                    <td>Middle Name</td>
                    <td>{{$data->middle_name}}</td>                    
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>{{$data->last_name}}</td>                    
                </tr>
                <tr>
                    <td>Address 1</td>
                    <td>{{$data->address_1}}</td>                    
                </tr>
                <tr>
                    <td>Address 2</td>
                    <td>{{$data->address_2}}</td>                    
                </tr>

                <tr>
                    <td>Country</td>
                    <td>{{$data->country}}</td>                    
                </tr>

                <tr>
                    <td>State</td>
                    <td>{{$data->state}}</td>                    
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$data->phone}}</td>                    
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td>{{$data->mobile_number}}</td>                    
                </tr>
                <tr>
                    <td>Fax</td>
                    <td>{{$data->fax}}</td>                    
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{$data->message}}</td>                    
                </tr>
                <tr>
                    <td>Sub Total</td>
                    <td>{{$data->sub_total}}</td>                    
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>{{$data->tax}}</td>                    
                </tr>
                <tr>
                    <td>Shipping Fee</td>
                    <td>{{$data->shipping_fee}}</td>                    
                </tr>
                <tr>
                    <td>status</td>
                    <td>{{$data->status}}</td>                    
                </tr>
                <tr>
                    <td>Final Total</td>
                    <td>{{$data->final_total}}</td>                    
                </tr>
                <tr>
                    <td>Payment Option</td>
                    <td>{{$data->payment_option}}</td>                    
                </tr>                          
                <tr>
                    <td>Created at</td>
                    <td>{{$data->created_at}}</td>                    
                </tr>  
                <tr>
                    <td>Updated at</td>
                    <td>{{$data->updated_at}}</td>                    
                </tr> 
                <tr>
                    <td>Updated at</td>
                 <td>{{$data->order_infos->id}}</td>                       -->
                </tr>          
             
               
                            
            </tbody>
        </table>
    </div>
</div>
@endsection
