<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Elementos de Empresa -->
   <title> @yield('page_title') | Optimall</title>
   <link rel="shortcut icon" type="image/png" href="{{ url('img/logos/logo_optimall_transparente.png') }}"/>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   <!-- Styles -->
   @include('layouts.styles')
   <!-- Page unique Styles -->
   @yield('page_styles')
  </head>
  <!-- Contenido -->
   @yield('content')
</html>
