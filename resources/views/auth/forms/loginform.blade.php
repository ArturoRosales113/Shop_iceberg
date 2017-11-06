<!-- Email -->
<div class="input-group form-group-no-border input-lg form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <span class="input-group-addon">
        <i class="now-ui-icons users_circle-08"></i>
    </span>

    {!! Form::email('email', old('email'),array('class' => 'form-control' , 'placeholder' => 'E-mail')) !!}

    @if ($errors->has('email'))
     </br>
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<!-- Password -->
<div class="input-group form-group-no-border input-lg {{ $errors->has('password') ? ' has-error' : '' }}">
    <span class="input-group-addon">
        <i class="now-ui-icons text_caps-small"></i>
    </span>
    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña ' )) !!}

    @if ($errors->has('password'))
     </br>
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<!-- Checkbox Remember Token -->
<div class="input-group form-group-no-border input-lg">
 <div class="form-check">
  <label class="form-check-label">
   {!! Form::checkbox('remember', 'true',array('id' => 'rememberCheckbox','class' => 'form-check-input', 'checked' => 'null')) !!}
   <span class="form-check-sign"></span>
   Recordarme
  </label>
 </div>
</div>
</div>

<!-- Footer del formulario de login -->
<div class="footer text-center">
   <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Iniciar Sesión</button>
</div>
<div class="pull-left">
   <h6>
       <a href="{{ route('customer.register') }}" class="link">Crear Cuenta</a>
   </h6>
</div>
<div class="pull-right">
   <h6>
       <a href="{{ route('password.request') }}" class="link">¿Olvidaste tu Contraseña?</a>
   </h6>
</div>
