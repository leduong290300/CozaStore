<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\Customer\CustomerLoginRequest;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function showAdminLoginForm()
    {
      return view('pages.login.login_admin');
    }

    public function showCustomerLoginForm()
    {
      return view('pages.login.login_user');
    }

    public function submitAdminLoginForm(LoginRequest $request)
    {
      $data = $request->validated();
      if (Auth::guard('admin')->attempt($data))
      {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
      }
      $error = 'Login account failed';
      return back()->with('error',$error);
    }

    public function submitCustomerLoginForm(CustomerLoginRequest $request)
    {
      $data = $request->validated();
      if (Auth::attempt($data))
      {
        $request->session()->regenerate();
        return redirect()->intended('/');
      }
      $error = 'Login account failed';
      return back()->with('error',$error);
    }
}
