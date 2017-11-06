<div class="section section-notifications" id="notifications">
 @if ($errors->has('email'))
  <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons objects_support-17"></i>
            </div>
            <strong>{{ $errors->first('email') }}</strong>
            <br>
            Cambialo e iténtalo de nuevo.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </span>
            </button>
        </div>
    </div>
 @endif
 @if ($errors->has('password'))
      <div class="container">
          <div class="alert-icon">
              <i class="now-ui-icons objects_support-17"></i>
          </div>
          <strong>{{ $errors->first('password') }}</strong>
          Cambialo e iténtalo de nuevo.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                  <i class="now-ui-icons ui-1_simple-remove"></i>
              </span>
          </button>
      </div>
  </div>
 @endif
</div>
