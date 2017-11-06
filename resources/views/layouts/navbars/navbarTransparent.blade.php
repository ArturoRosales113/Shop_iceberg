<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="100">
 <div class="container">
     {{-- <div class="dropdown button-dropdown">
         <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
             <span class="button-bar"></span>
             <span class="button-bar"></span>
             <span class="button-bar"></span>
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-header">Dropdown header</a>
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <a class="dropdown-item" href="#">Something else here</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">Separated link</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">One more separated link</a>
         </div>
     </div> --}}
     <div class="navbar-translate">
         <a class="navbar-brand" href="{{ url('/home') }}">
             <img src="{{url('img/logos/logo_optimall_transparente.png')}}" height="50px" alt=""> Optimall
         </a>
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-bar bar1"></span>
             <span class="navbar-toggler-bar bar2"></span>
             <span class="navbar-toggler-bar bar3"></span>
         </button>
     </div>

     <div class="collapse navbar-collapse justify-content-end" data-nav-image="{{ url('img/blurred-image-1.jpg') }}">
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('colecciones') }}">Colecciones</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('sucursales') }}">Sucursales</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
             </li>
             <!--Links de autentificación-->
             @include('layouts.navbars.authenticationlinks')
             <!--Links Sociales-->
             @include('layouts.navbars.sociallinks')
         </ul>
     </div>
 </div>
    </nav>
