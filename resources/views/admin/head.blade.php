<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Laravel</title>


  <link rel="stylesheet" href="{{ asset('cssf/style.css') }}">



  <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      overflow-x: hidden;
    }

    #sidebar-wrapper {
      min-height: 100vh;
      margin-left: -15rem;
      -webkit-transition: margin .25s ease-out;
      -moz-transition: margin .25s ease-out;
      -o-transition: margin .25s ease-out;
      transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
      padding: 0.875rem 1.25rem;
      font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
      width: 15rem;
    }

    #page-content-wrapper {
      min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
      margin-left: 0;
    }

    @media (min-width: 768px) {
      #sidebar-wrapper {
        margin-left: 0;
      }

      #page-content-wrapper {
        min-width: 0;
        width: 100%;
      }

      #wrapper.toggled #sidebar-wrapper {
        margin-left: -15rem;
      }
    }
  </style>

  <script>
    jQuery(document).ready(function($) {
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    })
  </script>


</head>



<body>
  <div class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"></div>
      <div class="list-group list-group-flush">
        <a href="{{ url('dashboard/')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#home6" class="list-group-item list-group-item-action bg-light dropdown-toggle" data-toggle="collapse" aria-expanded="false"> User</a>
        <ul class="collapse list-unstyled menu" id="home6">
          <li><a href="{{ url('user_create/')}}" class="list-group-item list-group-item-action bg-light ">Add User </a></li>
          <li><a href="{{ url('user_manage/')}}" class="list-group-item list-group-item-action bg-light ">User list</a></li>
        </ul>
        <a href="#home7" class="list-group-item list-group-item-action bg-light dropdown-toggle" data-toggle="collapse" aria-expanded="false"> Categories</a>
        <ul class="collapse list-unstyled menu" id="home7">
          <li><a href="{{ url('category_create/')}}" class="list-group-item list-group-item-action bg-light ">Add Categories </a></li>
          <li><a href="{{ url('category_manage/')}}" class="list-group-item list-group-item-action bg-light ">Categories list</a></li>
        </ul>
        <a href="#home10" class="list-group-item list-group-item-action bg-light dropdown-toggle" data-toggle="collapse" aria-expanded="false"> Sub-Categories</a>
        <ul class="collapse list-unstyled menu" id="home10">
          <li><a href="{{ url('sub_categorys_create/')}}" class="list-group-item list-group-item-action bg-light ">Add Sub-Categories </a></li>
          <li><a href="{{ url('sub_categorys_manage/')}}" class="list-group-item list-group-item-action bg-light ">Sub-Categories list</a></li>
        </ul>
        <a href="#home8" class="list-group-item list-group-item-action bg-light dropdown-toggle" data-toggle="collapse" aria-expanded="false"> Brand</a>
        <ul class="collapse list-unstyled menu" id="home8">
          <li><a href="{{ url('brand_create/')}}" class="list-group-item list-group-item-action bg-light ">Add Brand </a></li>
          <li><a href="{{ url('brand_manage/')}}" class="list-group-item list-group-item-action bg-light ">Brand list</a></li>
        </ul>
        <a href="#home9" class="list-group-item list-group-item-action bg-light dropdown-toggle" data-toggle="collapse" aria-expanded="false"> Products</a>
        <ul class="collapse list-unstyled menu" id="home9">
          <li><a href="{{ url('products_create/')}}" class="list-group-item list-group-item-action bg-light ">Add Products </a></li>
          <li><a href="{{ url('products_manage/')}}" class="list-group-item list-group-item-action bg-light ">Post Products</a></li>
        </ul>
        <a href="#home11" class="list-group-item list-group-item-action bg-light dropdown-toggle" data-toggle="collapse" aria-expanded="false"> Orders</a>
        <ul class="collapse list-unstyled menu" id="home11">
          <li><a href="{{ url('orders_create/')}}" class="list-group-item list-group-item-action bg-light ">Add Orders </a></li>
          <li><a href="{{ url('orders_manage/')}}" class="list-group-item list-group-item-action bg-light ">Orders Products</a></li>
        </ul>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->


    <!-- Page Content -->



    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="height: 50px;">
        <!-- <button class="btn btn-primary" id="menu-toggle">Hide Menu </button> -->


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
          
            </li>


            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>


              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> -->
            </li>
          </ul>
        </div>

      </nav>



      <div>

        @yield('content')

      </div>
    </div>

  </div>


</body>

</html>