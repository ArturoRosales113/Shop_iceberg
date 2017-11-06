@extends('layouts.dashboard.dashboardapp')
@section('page_title')
Sucursales
@endsection
@section('content')
 <div class="main-panel">
  <!-- Navbar -->7
  @include('backend.products.navbar')
   <!-- Contenido -->
   <div class="content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="header">
                                 <h4 class="title">Crear Sucursal</h4>
                             </div>
                             <div class="content">
                                <form class="" action="index.html" method="post">
                                 @include('backend.products.forms.productform')
                                 <button type="submit" class="btn btn-info btn-fill pull-right">Crear Sucursal</button>
                                 <div class="clearfix"></div>
                                </form>
                             </div>
                         </div>
                     </div>

@endsection
