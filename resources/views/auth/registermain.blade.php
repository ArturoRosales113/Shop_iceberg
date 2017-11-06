<div class="page-header section-image">
        <div class="page-header-image" style="background-image:url('{{ url('img/login_bg3.jpg') }}')"></div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-auto mr-auto">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="fa fa-shield"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">Compra Segura</h5>
                                <p class="description">
                                    Todas nuestras ventas están protegidas con lo último en seguridad
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">Recíbe lo último</h5>
                                <p class="description">
                                 Mantente al tanto de todo lo relacionado con el mundo de la moda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-signup">
                            <div class="card-body">
                                <h4 class="card-title text-center">Regístrate</h4>
                                {!! Form::open(['route' => ['register'], 'method' => 'POST', ]) !!}
                                {!! Form::token() !!}
                                @include('auth.forms.registerform')
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
