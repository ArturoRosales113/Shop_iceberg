<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth:frontweb');
=======
  protected $redirectTo ='/home';

    public function __construct()
    {
>>>>>>> 8d81bf3528f96f2fb8009c0f285f0d11ef325c59
    }

    public function index()
    {
        return view('frontend.home.home');
    }

    public function sucursales()
    {
        return view('frontend.sucursales.sucursales');
    }

    public function contacto()
    {
        return view('frontend.contacto.contacto');
    }

    public function colecciones()
    {
        return view('frontend.colecciones.collections');
    }

    public function frontTicket(Request $request)
    {
        return redirect('');
    }
}
