@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Categorias
@endsection
@section('content')
<div class="main-panel">
 <!-- Navbar -->
 @include('backend.categories.navbar')
  <!-- Navbar -->
 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="header text-center">
                         <h4 class="title">Categorias</h4>
                         <p class="category">de Productos</p>
                         <br>
                     </div>
                     <div class="content table-responsive table-full-width">
                         <table class="table table-bigboy">
                             <thead>
                                 <tr>
                                     <th class="text-center">--</th>
                                     <th>Nombre</th>
                                     <th class="th-description">Descripción</th>

                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                              @foreach ($cat as $c)
                               <tr>
                                   <td>
                                       <div class="img-container">
                                           <img src="{{ url($c->category_icon_path) }}"  alt="...">
                                       </div>
                                   </td>
                                   <td class="td-name">
                                       {{ $c -> category_name }}
                                   </td>
                                   <td>
                                    {{ $c -> category_description }}
                                   </td>
                                   <td class="td-actions">
                                       {{-- <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-info btn-simple btn-icon" data-original-title="View Post">
                                           <i class="fa fa-image"></i>
                                       </button> --}}
                                       {!! Form::open(['url' => '/manager/categories/'.$c->id.'/edit', 'method' => 'GET', 'class' => 'form-horizontal','files' => 'true']) !!}

                                       <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-success btn-simple btn-icon" data-original-title="Editar">
                                           <i class="fa fa-edit"></a></i>
                                       </button>
                                      {!! Form::close() !!}
                                      {!! Form::open(['url' => '/manager/categories/'.$c->id, 'method' => 'DELETE', 'class' => 'form-horizontal','files' => 'true']) !!}

                                      <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-danger btn-simple btn-icon " data-original-title="Borrar">
                                          <i class="fa fa-times"></i>
                                      </button>
                                      {!! Form::close() !!}


                                   </td>
                               </tr>
                              @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div><!--  end card  -->
             </div> <!-- end col-md-12 -->
         </div> <!-- end row -->
     </div><!-- Container Fluid -->
 </div><!-- Content -->
</div><!-- Main Panel -->
@endsection
