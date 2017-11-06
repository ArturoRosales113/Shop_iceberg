<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Elementos de Empresa -->
   <title> @yield('page_title') | Admin</title>
   <link rel="shortcut icon" type="image/png" href="{{ url('img/logos/logo_optimall_transparente.png') }}"/>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   <!-- Styles -->
   @include('layouts..dashboard.styles')
   <!-- Page unique Styles -->
   @yield('page_styles')
  </head>
  <body>
   <div class="wrapper">
    <!-- Sidebar -->
    @include('layouts.dashboard.sidebar')

     <!-- Contenido -->
     @yield('content')


   @include('layouts.dashboard.scripts')
   <script>
        // $().ready(function(){
        //     demo.initCharts();
        // });
    </script>
  </body>
</html>
