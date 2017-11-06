@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Categorías
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
                                 <h4 class="title">Editar Categorías</h4>
                             </div>
                             <div class="content">
                              {!! Form::model($prod,['route' => ['products.update',$prod -> id], 'method' => 'PUT', 'class' => 'form-horizontal','files' => 'true']) !!}
                              {!! Form::token() !!}
                              @include('backend.products.forms.productform')
                              <button type="submit" class="btn btn-info btn-fill pull-right">Guardar Cambios</button>
                              <div class="clearfix"></div>
                              {!! Form::close() !!}
                             </div>
                         </div>
                     </div>

@endsection
