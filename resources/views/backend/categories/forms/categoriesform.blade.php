<div class="row">
 <div class="col-md-4">
  <div class="header">
      <h4 class="title">Detalles de la Categoría</h4>
  </div>
 </div>
 <div class="col-md-8">
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('category_name', 'Nombre de la categoría') !!}
     {!! Form::text('category_name',null,array('class' => 'form-control','placeholder' => 'Ej. Lentes sol, lentes aumento')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('category_description', 'Descripción de la categoría') !!}
     {!! Form::text('category_description',null,array('class' => 'form-control','placeholder' => 'Ej. Lentes sol, lentes aumento')) !!}
    </div>
   </div>
  </div>
  <div class="row">
   <div class="col-md-12">
    <div class="form-group">
     {!! Form::label('category_icon_path', 'Imagen de la categoría') !!}
     {!! Form::file('category_icon_path',null,array('class' => 'form-control','placeholder' => 'Imagen')) !!}
    </div>
   </div>
  </div>
 </div>
</div>
