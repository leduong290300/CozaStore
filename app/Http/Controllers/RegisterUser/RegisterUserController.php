<?php

namespace App\Http\Controllers\RegisterUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUser\RegisterUserRequest;
use App\Models\Customers;
class RegisterUserController extends Controller
{
    public function register()
    {
      return view('pages.register_user');
    }

    /*TODO: Check data post from form register => If true save database and false response error*/
    public function registerSubmit(RegisterUserRequest $request)
    {
      $data = $request->validated();
      $customers = new Customers();
      $value = [
          "username" => $data["username"],
          "email" => $data["email"],
          "address" => $data["address"],
          "phone_number" => $data["phone"],
          "password" => bcrypt($data["password"])
      ];
      try {
        $customers->create($value);
        $success = 'Create account successfully';
        return redirect()
            ->route('showFormLoginUser')
            ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Create account failed';
        return back()->with('error',$error);
      }
    }
}
