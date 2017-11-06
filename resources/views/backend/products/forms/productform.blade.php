
<!-- Detalles del Proveedor -->
<hr>
@include('Backend.products.forms.supplierinfo')
<hr>
<!-- Detalles del Producto -->
<div class="row">
 <div class="col-md-4">
  <div class="header">
      <h4 class="title">Detalles del Producto</h4>
  </div>
 </div>
 <div class="col-md-8">
  <div class="row">
   <!-- Nombre -->
      <div class="col-md-12">
          <div class="form-group">
              {!! Form::label('product_name', 'Nombre del Producto') !!}
              {!! Form::text('product_name',null,array('class' => 'form-control','placeholder' => 'Nombre Producto')) !!}
          </div>
      </div>
  </div>
  <div class="row">
   <!-- Modelo -->
   <div class="col-md-6">
       <div class="form-group">
           {!! Form::label('product_model', 'Modelo') !!}
           {!! Form::text('product_model',null,array('class' => 'form-control','placeholder' => 'Modelo Ej: MCD0027MAR33')) !!}
       </div>
   </div>
   <!-- Codigo de barras del Producto -->
   <div class="col-md-6">
       <div class="form-group">
           {!! Form::label('product_code', 'Código de Barras') !!}
           {!! Form::text('product_code',null,array('class' => 'form-control','placeholder' => 'Código de Barras Ej: 0121020120102000')) !!}
       </div>
   </div>
 </div>
 <div class="row">
  <!-- Precio del Producto -->
  <div class="col-md-6">
      <div class="form-group">
          {!! Form::label('product_price', 'Precio') !!}
          {!! Form::text('product_price',null,array('class' => 'form-control','placeholder' => '00.00')) !!}
      </div>
  </div>
  <!-- Disponibilidad en inventario del Producto -->
  <div class="col-md-6">
      <div class="form-group">
          {!! Form::label('product_availability', 'Piezas Disponibles en inventario') !!}
          {!! Form::text('product_availability',null,array('class' => 'form-control','placeholder' => '0')) !!}
      </div>
  </div>
 </div>
 @include('backend.products.forms.categories')
 <div class="row">
  <!-- Descripcion -->
  <div class="col-md-12">
      <div class="form-group">
          {!! Form::label('product_description', 'Descripción') !!}
          {!! Form::textarea('product_description',null,array('class' => 'form-control','placeholder' => 'Descripción')) !!}
      </div>
  </div>
 </div>

</div>
</div>
