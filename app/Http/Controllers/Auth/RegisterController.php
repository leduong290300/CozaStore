<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\Customers;
use App\Http\Requests\Admin\RegisterRequest;
use App\Http\Requests\Customer\CustomerRegisterRequest;

class RegisterController extends Controller
{

    public function showRegisterAdminForm()
    {
      return view('pages.register.register_admin');
    }

    public function showCustomerRegisterForm()
    {
      return view('pages.register.register_user');
    }

    public function submitRegisterAdminForm(RegisterRequest $request)
    {
      $data = $request->validated();
      $admin = new Admins();
      try {
        $admin -> create([
          "username" => $data["username"],
          "email" => $data["email"],
          "address" => $data["address"],
          "phone_number" => $data["phone"],
          "password" => bcrypt($data["password"])
        ]);
        $success = 'Create account successfully';
        return redirect()
          ->route('admin_login')
          ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Create account failed';
        return back()->with('error',$error);
      }
    }

    public function submitRegisterCustomerForm(CustomerRegisterRequest $request)
    {
      $data = $request->validated();
      $customer = new Customers();
      try {
        $customer -> create([
          "username" => $data["username"],
          "email" => $data["email"],
          "address" => $data["address"],
          "phone_number" => $data["phone"],
          "password" => bcrypt($data["password"])
        ]);
        $success = 'Create account successfully';
        return redirect()
          ->route('customer_login')
          ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Create account failed';
        return back()->with('error',$error);
      }
    }
}
