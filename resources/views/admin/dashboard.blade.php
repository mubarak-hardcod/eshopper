@extends('admin.head')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class=" col-12 mb-2">
           <h4>DASHBOARD</h4>

        </div>
       
        <div class="col-3">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading"><h4>No.Of.Users</h4> </div>
                            <!-- <div class="widget-subheading">Last year expenses</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{$users}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading"><h4>No.Of.Brand</h4> </div>
                            <!-- <div class="widget-subheading">Last year expenses</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{$brands}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading"><h4>No.Of.Category</h4> </div>
                            <!-- <div class="widget-subheading">Last year expenses</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{$categorys}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading"><h4>No.Of.Sub-Category</h4> </div>
                            <!-- <div class="widget-subheading">Last year expenses</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{$sub_categorys}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading"><h4>No.Of.Products</h4> </div>
                            <!-- <div class="widget-subheading">Last year expenses</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{$products}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading"><h4>No.Of.Orders</h4> </div>
                            <!-- <div class="widget-subheading">Last year expenses</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">{{$orders}}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection