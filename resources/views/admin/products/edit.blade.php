@extends('admin.head')
@section('content')
<main class="signup-form">
    <div class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Edit Products</h3>
                    <div class="card-body">
                        <form action="{{ route('products_update',$datas->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{$datas->name}}"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>                         
                         
                            <div class="form-group mb-3">
                              <textarea name="description" class="form-control"placeholder="Description">{{$datas->description}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Price" id="price" class="form-control" name="price" value="{{$datas->price}}"
                                    required autofocus>
                                @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>     
                            <div class="form-group mb-3">
                                <input type="file" placeholder="Image" id="image" class="form-control"
                                    name="image" >{{$datas->image}}
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                           
                            <div class="form-group mb-3">
                                <label>Select Brand</label>
                                <select class="form-control select2"  data-placeholder="Select a Brand" style="width: 100%;" tabindex="-1" aria-hidden="true" name="brand">
                                  @foreach ($datas2 as $data)
                                    <option value="{{ $data->id }}" @if ($data->id == $datas->brand) selected  @endif >{{ $data->name }}</option>
                                  @endforeach
                                </select>
                              </div>    
                            <div class="form-group mb-3">
                                <label>Select Categories</label>
                                <select class="form-control select2"data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="sub_category">
                                @foreach ($datas1 as $category)
                                  <option value="{{ $category->id }}"@if ($category->id == $datas->sub_category) selected  @endif >{{ $category->name }}</option>
                                @endforeach
                                </select>
                              </div>     
                            <label>
                                    <input type="checkbox" name="status" value="1" @if ($datas->status == 1)
                        {{'checked'}}
                      @endif> Publish
                                  </label>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success ">Update</button>
                             <a class="btn btn-primary  " href="{{ url('post_index/')}}" role="button" >Back </a>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
