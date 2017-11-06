@if (isset($sup))
@include('backend.address.addressformbinding')
@else
@include('backend.address.addressform')
@endif

<hr>
<div class="row">
 <div class="col-md-4">
  <div class="header">
      <h4 class="title">Detalles del Proveedor</h4>
  </div>
 </div>
 <div class="col-md-8">
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('supplier_name', 'Nombre Proveedor') !!}
     {!! Form::text('supplier_name',null,array('class' => 'form-control','placeholder' => 'Hawkers, Clavin Klein, Levi´s')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('supplier_description', 'Descripción del Proveedor') !!}
     {!! Form::text('supplier_description',null,array('class' => 'form-control','placeholder' => 'Proveedor con garantía limitada en el estado de méxico ')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('supplier_logo_path', 'Logo del proveedor') !!}
     {!! Form::file('supplier_logo_path',null,array('class' => 'form-control','placeholder' => '')) !!}
    </div>
   </div>
  </div>
 </div>
</div>
<hr>
<div class="row">
 <div class="col-md-4">
  <div class="header">
      <h4 class="title">Contacto con Proveedor</h4>
  </div>
 </div>
 <div class="col-md-8">
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('supplier_contact_name', 'Nombre del Ejecutivo') !!}
     {!! Form::text('supplier_contact_name',null,array('class' => 'form-control','placeholder' => 'Juan Soto Morales')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-6">
    <div class="form-group">
     {!! Form::label('supplier_phone', 'Teléfono del Proveedor') !!}
     {!! Form::text('supplier_phone',null,array('class' => 'form-control','placeholder' => '01 (55)00-00-00-00')) !!}
    </div>
   </div>
   <div class="col-md-6">
    <div class="form-group">
     {!! Form::label('supplier_email', 'E-mail del Proveedor') !!}
     {!! Form::text('supplier_email',null,array('class' => 'form-control','placeholder' => 'email@email.com')) !!}
    </div>
   </div>
  </div>
 </div>
</div>
