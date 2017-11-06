{!! Form::open(['route' => ['front.ticket'], 'method' => 'POST', 'class' => 'form-horizontal','role' => 'form','id' => 'contact_form']) !!}
{!! Form::token() !!}
    <!-- Nombre -->
    {!! Form::label('ticket_name', 'Nombre') !!}
    <div class="input-group">
     <span class="input-group-addon">
         <i class="now-ui-icons users_circle-08"></i>
     </span>
     {!! Form::text('ticket_name',null,array('class' => 'form-control','placeholder' => 'Nombre...')) !!}
    </div>
    <!-- Email -->
    {!! Form::label('ticket_email', 'Email') !!}
    <div class="input-group">
     <span class="input-group-addon">
         <i class="now-ui-icons ui-1_email-85"></i>
     </span>
     {!! Form::text('ticket_email',null,array('class' => 'form-control','placeholder' => 'Email...')) !!}
     </div>
     <!-- Teléfono -->
     {!! Form::label('ticket_phone', 'Teléfono') !!}
     <div class="input-group">
      <span class="input-group-addon">
          <i class="now-ui-icons tech_mobile"></i>
      </span>
      {!! Form::text('ticket_phone',null,array('class' => 'form-control','placeholder' => 'Teléfono...')) !!}
      </div>
      <!-- Mensaje -->
     <div class="form-group">
      {!! Form::label('ticket_message', 'Mensaje:') !!}
      {!! Form::textarea('ticket_message',null,array('class' => 'form-control','placeholder' => 'Mensaje...')) !!}
     </div>

    <div class="submit text-center">
     {!! Form::submit('Enviar Mensaje',array('class' => ' btn-primary btn-raised btn-round')) !!}
    </div>
{!! Form::close() !!}
