@extends('admin.head')
@section('content')
<main class="signup-form">
    <div class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Create Categories</h3>
                    <div class="card-body">
                        <form action="{{ route('category_create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" >
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>                             

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success ">Create</button>
                                <a class="btn btn-primary  " href="{{ url('category_manage/')}}" role="button">Back </a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection