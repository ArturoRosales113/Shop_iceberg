@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Productos
@endsection
@section('content')
<div class="main-panel">
 <!-- Navbar -->
 @include('backend.products.navbar')
  <!-- Navbar -->
 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="header text-center">
                         <h4 class="title">Productos</h4>
                         <p class="category">Listado de Productos</p>
                         <br>
                     </div>
                     <div class="content table-responsive table-full-width">
                         <table class="table table-bigboy">
                             <thead>
                                 <tr>
                                     <th class="text-center">Producto</th>
                                     <th class="text-center">Proovedor</th>
                                     <th class="text-center">Categorías</th>
                                     <th class="text-center">Precio</th>
                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($prod as $p)
                                  <tr>
                                      {{-- <td class="td-number">
                                        <small> {{ $p -> product_code }}</small>
                                      </td> --}}
                                      <td class="td-name text-center">
                                          {{ $p -> product_name }}
                                          <br>
                                          <small> {{ $p -> product_model }}</small>
                                          <br>
                                          {{-- <small><p>{{ $p -> product_description  }}</p></small> --}}
                                      </td>
                                      <td class="td-supplier">
                                       {{ $p->supplier->supplier_name  }}
                                      </td>
                                      <td class="text-center">
                                       @foreach ($p->categories as $pc)
                                         <span>{{$pc->category_name}}</span>
                                         <br>
                                       @endforeach
                                      </td>

                                      <td class="td-number">
                                         {{ $p ->  product_price}}
                                      </td>
                                      <td class="td-actions">
                                       {!! Form::open(['route' => ['products.edit',$p -> id], 'method' => 'GET', 'class' => 'form-horizontal','files' => 'true']) !!}

                                       <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-success btn-simple btn-icon" data-original-title="Editar">
                                           <i class="fa fa-edit"></a></i>
                                       </button>
                                      {!! Form::close() !!}
                                      {!! Form::open(['url' => '/manager/products/'.$p->id, 'method' => 'DELETE', 'class' => 'form-horizontal','files' => 'true']) !!}

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
