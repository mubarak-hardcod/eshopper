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
        <h3>Products Manage</h3>
        <table id="example1" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->slug}}</td>
                    <td> &#8377;{{$data->price}}</td>
                    <td> <img src="{{url('eshopper/images/'.$data->image)}}" alt="profile" style="width: 50px;height:50px;"></td>
                    <td>{{$data->status}}</td>             
                 
                    <td><a href="{{ url('products_detail/'. $data->id)}}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('products_edit/'. $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <form id="delete-form-{{ $data->id }}" method="post" action="{{ url('products_delete/'.$data->id) }}" style="display: none">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                      </form>
                        <button type="submit" name="delete" onclick=" if(confirm('Are you sure, You Want to delete this?'))
                          {
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $data->id }}').submit();
                          }
                          else{
                            event.preventDefault();
                          }"  id='btn_delete' value="{{$data->id}}" class="btn btn-danger btn-sm">Delete</button>
                     
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $datas->links() !!}
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@endsection