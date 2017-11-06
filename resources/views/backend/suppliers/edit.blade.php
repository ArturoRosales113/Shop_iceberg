@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Proveedores
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
                                 <h4 class="title">Editar Proveedor</h4>
                             </div>
                             <div class="content">
                              {!! Form::model($sup, ['route' => ['suppliers.update',$sup -> id], 'method' => 'PUT', 'class' => 'form-horizontal','files' => 'true']) !!}
                              {!! Form::token() !!}
                              @include('backend.suppliers.forms.suppliersform')
                              <button type="submit" class="btn btn-info btn-fill pull-right">Guardar Cambios</button>
                              <div class="clearfix"></div>
                              {!! Form::close() !!}
                             </div>
                         </div>
                     </div>

@endsection
