<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Customer;

class CustomerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:frontweb');
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
     // Validar los datos del form
     $this->validate($request, [
      'email' => 'required|string|email|max:255',
      'password' => 'required',
     ]);
     // Intentar de iniciar sesión con el usuario
     if (Auth::guard('frontweb')->attempt(['email' => $request->email, 'password' => $request->password], $request->remeber))
     {
      // Si el incio de sesión es válido
      return redirect()->intended(route('customer.profile'));
     }
    }

    public function showRegisterForm()
    {
        return view('frontend.auth.register');
    }

    public function storeRegisterForm(Request $request)
    {
        $this->validate($request, [
         'email' => 'required|unique:customers|string|email|max:255 ',
         'password' => 'required|string|min:6|confirmed',
        ]);

        $cust = new Customer;
        $cust->email = $request->email;
        $cust->password = Hash::make($request->password);
        $cust->save();

        Auth::guard('frontweb')->login($cust);
        return redirect(route('customer.profile'));
    }
    public function logout()
    {
      Auth::guard('frontweb')->logout();
      return redirect('/');
    }
}
