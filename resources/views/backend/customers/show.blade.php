@extends('layouts.dashboard.dashboardapp')
@section('page_title')

@endsection
@section('content')
 <div class="main-panel">
  <!-- Navbar -->
  @include('backend.products.navbar')
   <!-- Navbar -->
  <div class="content">
      <div class="container-fluid">
          <div class="row">
           <div class="col-md-4">
             <div class="card card-user">
                 <div class="image">
                     <img src="../../assets/img/full-screen-image-3.jpg" alt="...">
                 </div>
                 <div class="content">
                     <div class="author">
                          <a href="#">
                         <img class="avatar border-gray" src="../../assets/img/default-avatar.png" alt="...">

                           <h4 class="title">Tania Andrew<br>
                              <small>michael24</small>
                           </h4>
                         </a>
                     </div>
                     <p class="description text-center"> "Lamborghini Mercy <br>
                                         Your chick she so thirsty <br>
                                         I'm in that two seat Lambo"
                     </p>
                 </div>
                 <hr>
                 <div class="text-center">
                     <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                     <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                     <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                 </div>
             </div>
            </div>
          </div> <!-- end row -->
      </div><!-- Container Fluid -->
  </div><!-- Content -->
 </div><!-- Main Panel -->

@endsection
