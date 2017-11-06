@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Categorías
@endsection
@section('content')
 <div class="main-panel">
  <!-- Navbar -->
  @include('backend.categories.navbar')
   <!-- Contenido -->
   <div class="content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="header">
                                 <h4 class="title">Crear Categorías</h4>
                             </div>
                             <div class="content">
                              {!! Form::open(['route' => ['categories.store'], 'method' => 'POST', 'class' => 'form-horizontal','files' => 'true']) !!}
                              {!! Form::token() !!}
                              @include('backend.categories.forms.categoriesform')
                              <button type="submit" class="btn btn-info btn-fill pull-right">Crear Categoría</button>
                              <div class="clearfix"></div>
                              {!! Form::close() !!}
                             </div>
                         </div>
                     </div>

@endsection
