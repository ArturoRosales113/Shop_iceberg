
 <div class="page-header" filter-color="blue">
 <div class="page-header-image" style="background-image:url({{ url('img/login_bg1.jpg') }})"></div>
 <div class="container">
  <div class="col-md-4 content-center">
   <div class="card card-login card-plain">

    <!-- Header del formulario de login -->
    <div class="header header-primary text-center">
        <div class="logo-container">
            <img src="{{ url('img/logos/logo_optimall_transparente.png') }}" alt="">
        </div>
    </div>

    <!-- Contenido del formulario de login -->
    <div class="content">
     {!! Form::open(['route' => ['customer.login.submit'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
     {!! Form::token() !!}
     @include('auth.forms.loginform')
     {!! Form::close() !!}
    </div>

  </div>
 </div>
</div>
