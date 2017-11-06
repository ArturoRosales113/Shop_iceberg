@extends('layouts.app')
@section('page_title')
 Registrarse
@endsection
@section('content')
<body class="signup-page">
 <!-- Navbar -->
 @include('layouts.navbars.navbarTransparent')
 <!--Contenido-->
 @include('frontend.auth.registermain')
</body>
@endsection
