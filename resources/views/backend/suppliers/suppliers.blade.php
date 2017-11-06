@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Proveedores
@endsection
@section('content')
<div class="main-panel">
 <!-- Navbar -->
 @include('backend.suppliers.navbar')
  <!-- Navbar -->
 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="header text-left">
                         <h4 class="title">Proveedores</h4>
                         <p class="category">de Productos</p>
                         <br>
                     </div>
                     <div class="content table-responsive table-full-width">
                         <table class="table table-bigboy">
                             <thead>
                                 <tr>
                                  {{-- 'supplier_address_id', 'supplier_contact_name', 'supplier_phone', 'supplier_email', 'supplier_logo_path', 'supplier_description' --}}
                                     <th class="text-center">--</th>
                                     <th>Nombre</th>
                                     <th class="th-description">Descripción</th>
                                     <th class="th-description">Dirección</th>

                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                              @foreach ($sup as $s)
                               <tr>
                                   <td>
                                       <div class="img-container">
                                           <img src="{{ url($s->supplier_logo_path) }}"  alt="...">
                                       </div>
                                   </td>
                                   <td class="td-name">
                                       {{ $s -> supplier_name }}
                                   </td>
                                   <td>
                                    {{ $s -> supplier_description }}
                                   </td>
                                   <td>
                                   {{$s->address->address_street}}
                                   <br>
                                   {{$s->address->address_city}}
                                   </td>
                                   <td class="td-actions">
                                       {{-- <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-info btn-simple btn-icon" data-original-title="View Post">
                                           <i class="fa fa-image"></i>
                                       </button> --}}
                                       {!! Form::open(['route' => ['suppliers.edit',$s -> id], 'method' => 'GET', 'class' => 'form-horizontal','files' => 'true']) !!}

                                       <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-success btn-simple btn-icon" data-original-title="Editar">
                                           <i class="fa fa-edit"></i>
                                       </button>
                                      {!! Form::close() !!}
                                      {!! Form::open(['url' => '/manager/suppliers/'.$s -> id, 'method' => 'DELETE', 'class' => 'form-horizontal','files' => 'true']) !!}

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
