<?php

namespace App\Http\Controllers\LoginUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUser\LoginUserRequest;
use Illuminate\Support\Facades\Auth;
class LoginUserController extends Controller
{
    public function login()
    {
      return view('pages.login_user');
    }

    /*TODO: Auth infor user when login,If login success redirect home else redirect back with error*/
    public function loginSubmit(LoginUserRequest $request)
    {
      $data = $request->validated();
      if (Auth::attempt($data)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
      }
      $error = 'Login account failed';
      return back()->with('error',$error);
    }

    /*TODO:Logout user and remove the authentication information from the user's session*/
    public function logoutSubmit()
    {
      Auth::logout();
      return redirect('/');
    }
}
