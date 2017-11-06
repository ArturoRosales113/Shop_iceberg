@extends('layouts.dashboard.dashboardapp')
@section('page_title')
 Pedidos
@endsection
@section('content')
<div class="main-panel">
 <!-- Navbar -->
 @include('backend.orders.navbar')
  <!-- Navbar -->
 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="header text-center">
                         <h4 class="title">Pedidos</h4>
                         <p class="category">Listado de pedidos</p>
                         <br>
                     </div>
                     <div class="content table-responsive table-full-width">
                         <table class="table table-bigboy">
                             <thead>
                                 <tr>
                                     <th class="text-center">id de orden</th>
                                     <th>Blog Nombre</th>
                                     <th class="th-description">Cliente</th>
                                     <th class="text-right">Productos</th>
                                     <th class="text-right">Detalles de la orden</th>
                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <div class="img-container">
                                             <img src="../../assets/img/blog-1.jpg" alt="...">
                                         </div>
                                     </td>
                                     <td class="td-name">
                                         10 Things that all designers do
                                     </td>
                                     <td>
                                         Most beautiful agenda for the office, really nice paper and black cover. Most beautiful agenda for the office.
                                     </td>
                                     <td class="td-number">30/08/2016</td>
                                     <td class="td-number">
                                        1,225
                                     </td>
                                     <td class="td-actions">
                                         <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-info btn-simple btn-icon" data-original-title="View Post">
                                             <i class="fa fa-image"></i>
                                         </button>
                                         <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-success btn-simple btn-icon" data-original-title="Edit Post">
                                             <i class="fa fa-edit"></i>
                                         </button>
                                         <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-danger btn-simple btn-icon " data-original-title="Remove Post">
                                             <i class="fa fa-times"></i>
                                         </button>
                                     </td>
                                 </tr>
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
