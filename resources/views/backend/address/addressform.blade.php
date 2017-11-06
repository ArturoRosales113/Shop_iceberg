<div class="row">
 <div class="col-md-4">
  <div class="header">
      <h4 class="title">Dirección</h4>
  </div>
 </div>
 <div class="col-md-8">
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('address_street', 'Calle y Número') !!}
     {!! Form::text('address_street',null,array('class' => 'form-control','placeholder' => 'Calle Siempre Viva #9')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('address_neighbourhood', 'Colonia') !!}
     {!! Form::text('address_neighbourhood',null,array('class' => 'form-control','placeholder' => 'Col. El Mar Azul')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-6">
    <div class="form-group">
     {!! Form::label('address_city', 'Ciudad') !!}
     {!! Form::text('address_city',null,array('class' => 'form-control','placeholder' => 'Ciudad')) !!}
    </div>
   </div>
   <div class="col-md-6">
    <div class="form-group">
     {!! Form::label('address_state', 'Estado') !!}
     {!! Form::text('address_state',null,array('class' => 'form-control','placeholder' => 'Estado')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-6">
    <div class="form-group">
     {!! Form::label('address_city', 'Codigo Postal') !!}
     {!! Form::text('address_postal_code',null,array('class' => 'form-control','placeholder' => 'CP 00000')) !!}
    </div>
   </div>
  </div>
 </div>
</div>
