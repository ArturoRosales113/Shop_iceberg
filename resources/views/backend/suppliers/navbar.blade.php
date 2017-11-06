<nav class="navbar navbar-default">
          <div class="container-fluid">
  <div class="navbar-minimize">
   <button id="minimizeSidebar" class="btn btn-neutral btn-fill btn-round btn-icon">
    <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
    <i class="fa fa-navicon visible-on-sidebar-mini"></i>
   </button>
  </div>
   <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">@yield('page_title')</a>
   </div>
   <div class="collapse navbar-collapse">

       <form class="navbar-form navbar-left navbar-search-form" role="search">
           <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-search"></i></span>
               <input type="text" value="" class="form-control" placeholder="Buscar...">
           </div>
       </form>

       <ul class="nav navbar-nav navbar-right">
           <li>
               <a href="{{ url('manager/suppliers/create') }}">
                   <i class="fa fa-plus-circle"></i>
                   <p>Crear Proveedor</p>
               </a>
           </li>

           {{-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-gavel"></i>
                   <p class="hidden-md hidden-lg">
                       Acciones
                       <b class="caret"></b>
                   </p>
               </a>
               <ul class="dropdown-menu">
                   <li><a href="#">Crear Producto</a></li>
                   <li><a href="#">Manage Something</a></li>
                   <li><a href="#">Do Nothing</a></li>
                   <li><a href="#">Submit to live</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Another Action</a></li>
               </ul>
           </li>

           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-bell-o"></i>
                   <span class="notification">5</span>
                   <p class="hidden-md hidden-lg">
                     Notifications
                     <b class="caret"></b>
                    </p>
               </a>
               <ul class="dropdown-menu">
                   <li><a href="#">Notification 1</a></li>
                   <li><a href="#">Notification 2</a></li>
                   <li><a href="#">Notification 3</a></li>
                   <li><a href="#">Notification 4</a></li>
                   <li><a href="#">Another notification</a></li>
               </ul>
           </li> --}}

           <li class="dropdown dropdown-with-icons">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-list"></i>
                   <p class="hidden-md hidden-lg">
                    More
                    <b class="caret"></b>
                   </p>
               </a>
               <ul class="dropdown-menu dropdown-with-icons">
                   <li>
                       <a href="#">
                           <i class="fa fa-envelope-o"></i> Messages
                       </a>
                   </li>
                   <li>
                       <a href="#">
                           <i class="fa fa-question-circle"></i> Help Center
                       </a>
                   </li>
                   <li>
                       <a href="#">
                           <i class="fa fa-cogs"></i> Settings
                       </a>
                   </li>
                   <li class="divider"></li>

                   <li>
                    <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out"></i>
                         Cerrar Sesión
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                   </li>
               </ul>
           </li>

       </ul>
   </div>
  </div>
</nav>
