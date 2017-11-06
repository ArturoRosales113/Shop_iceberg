<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:frontweb');
    }

    public function showProfile()
    {
        // $prof = Customer::find('id');
        return view('frontend.customer.profile.viewprofile');
    }
}
