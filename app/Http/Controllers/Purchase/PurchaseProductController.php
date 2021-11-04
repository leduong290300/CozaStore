<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

class PurchaseProductController extends Controller
{
    public function purchaseProduct(Request $request)
    {
        $data = $request->all();
        $currenCustomer = Auth::id();
        $newOrders = new Orders();
        $orderSession = session()->get('cart');
        $value = [];
        foreach ($orderSession as $order) {
          $total = $order['quanlity'] * $order['price'];
          $value[] = [
            'code' => rand(0,99999),
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'product' => $order['name'],
            'quality' => (int)$order['quanlity'],
            'total_price' => (float)$total,
            'status' => 'Pending',
            'customers_id' => $currenCustomer
          ];
        }
        try {
          $newOrders->insert($value);
          session()->forget('cart');
          return response()->json(['data' => $value]);
        } catch (\Exception $e) {
          \Log::error($e);
        }
    }
}
