<div class="sidebar" data-color="azure" data-image="{{ url('img/bg6.jpg') }}">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="{{ url('/manager') }}" class="logo-text">
             <img src="{{ url('img/logos/logo_optimall_transparente.png')}}" height="30px" alt=""> Optimall
            </a>
        </div>
		<div class="logo logo-mini">
			<a href="{{ url('/manager') }}" class="logo-text">
				<img src="{{ url('img/logos/logo_optimall_transparente.png')}}" height="30px" alt="">
			</a>
		</div>

    	<div class="sidebar-wrapper">

            <div class="user">
                <div class="photo">
                    <img src="{{ url('img/profile1.jpg') }}">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                      {{Auth::user()->name}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#">Editar Perfil</a></li>
                            <li> <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                 Cerrar Sesión
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                             </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                {{-- <li>
                    <a href="{{ url('/manager') }}">
                        <i class="fa fa-tachometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li> --}}
                <li>
                    <a data-toggle="collapse" href="#porductscomponents">
                        <i class="fa fa-shopping-bag"></i>
                        <p>Productos
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="porductscomponents">
                        <ul class="nav">
                            <li><a href="{{ url('/manager/products') }}">Vista General</a></li>
                            <li><a href="components/grid.html">Buscar Producto</a></li>
                            <li><a href="{{ url('/manager/categories') }}">Categorías</a></li>
                            <li><a href="{{ url('/manager/suppliers') }}">Proveedores</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#orderscomponents">
                        <i class="fa fa-shopping-basket"></i>
                        <p>Pedidos
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="orderscomponents">
                        <ul class="nav">
                            <li><a href="{{ url('/manager/orders') }}">Todos Los Pedidos</a></li>
                            <li><a href="{{ url('/manager/ordersearch') }}">Buscar Pedido</a></li>
                            <li><a href="components/icons.html">Pendientes</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#clientscomponents">
                        <i class="fa fa-users"></i>
                        <p>Clientes
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="clientscomponents">
                        <ul class="nav">
                            <li><a href="{{ url('/manager/customers') }}">Todos Los Clientes</a></li>
                            <li><a href="{{ url('/manager/customersearch') }}">Buscar Clientes</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#storescoponents">
                        <i class="fa fa-industry"></i>
                        <p>Sucursales
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="storescoponents">
                        <ul class="nav">
                            <li><a href="{{ url('/manager/stores') }}">Todos Las Sucursales</a></li>
                            <li><a href="{{ url('/manager/storesearch') }}">Buscar Sucursal</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#employeescomponents">
                        <i class="fa fa-id-card-o"></i>
                        <p>Empleados
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="employeescomponents">
                        <ul class="nav">
                            <li><a href="{{ url('/manager/employees') }}">Todos Los Empleados</a></li>
                            <li><a href="{{ url('/manager/employeesearch') }}">Buscar Empleado</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
    	</div>
    <div class="sidebar-background" style="background-image: url({{ url('img/bg3.jpg') }}) "></div></div>
