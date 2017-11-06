@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Producto
@endsection
@section('content')
 <div class="main-panel">
  <!-- Navbar -->
  @include('backend.products.navbar')
   <!-- Contenido -->
   <div class="content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="header">
                                 <h4 class="title">Crear Producto</h4>
                             </div>
                             <div class="content">
                              {!! Form::open(['route' => ['products.store'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                              {!! Form::token() !!}
                              @include('backend.products.forms.productform')
                              <button type="submit" class="btn btn-info btn-fill pull-right">Crear Producto</button>
                              <div class="clearfix"></div>
                              {!! Form::close() !!}
                             </div>
                         </div>
                     </div>

@endsection
