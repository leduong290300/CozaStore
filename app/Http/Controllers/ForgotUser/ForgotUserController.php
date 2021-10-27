<?php

namespace App\Http\Controllers\ForgotUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotUserController extends Controller
{
    public function forgot()
    {
      return view('pages.forgot_user');
    }
}
