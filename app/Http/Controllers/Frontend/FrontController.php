<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontController extends Controller
{
  protected $redirectTo ='/home';

    public function __construct()
    {
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
