@extends('admin.head')
@section('content')
<div class="container mt-3">
    @if(session('success'))
    <div class="alert alert-info">    
    <h5>{{session('success')}}  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></h5>
    </div>
    @endif     
    @if(session('unsuccess'))
                    <div class="alert alert-danger">
                        <h5>{{session('unsuccess')}}</h5>
                    </div>
                    @endif         
    <div class="row">   
        <h3>Categories Manage</h3>
        <table id="example1" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Category </th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Status</th>                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{$data->category_name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->slug}}</td>
                    <td>{{$data->status}}</td>
                 
                    <td><a href="{{ url('sub_categorys_detail/'. $data->id)}}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('sub_categorys_edit/'. $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <form id="delete-form-{{ $data->id }}" method="post" action="{{ url('sub_categorys_delete/'.$data->id) }}" style="display: none">
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