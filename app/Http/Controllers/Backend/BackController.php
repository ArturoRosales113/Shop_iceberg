<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard.dashboard');
    }
    public function search()
    {
        return view('backend.orders.search');
    }
}
