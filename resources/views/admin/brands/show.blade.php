@extends('admin.head')
@section('content')

<div class="container mt-4">
    <div class="row">
        <h3>Brand Detail</h3>
        
        <a class="btn btn-primary mb-3 " href="{{ url('brand_manage/')}}" role="button" style="margin-left:80%;">Back </a>

        <table class="table table-bordered">
            <thead>               
            </thead>
            <tbody>
            
                <tr>
                    <td>id</td>
                    <td>{{$data->id}}</td>                    
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$data->name}}</td>                    
                </tr>
                <tr>
                    <td>Slug</td>
                    <td>{{$data->slug}}</td>                    
                </tr>  
                <tr>
                    <td>status</td>
                    <td>{{$data->status}}</td>                    
                </tr>
                <tr>
                    <td>Created at</td>
                    <td>{{$data->created_at}}</td>                    
                </tr>  
                <tr>
                    <td>Updated at</td>
                    <td>{{$data->updated_at}}</td>                    
                </tr>              
                            
            </tbody>
        </table>
    </div>
</div>
@endsection
