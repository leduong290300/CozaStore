<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Support\Facades\Auth;
use App\Mail\MailPurchase;
use Illuminate\Support\Facades\Mail;
class PurchaseProductController extends Controller
{
    public function purchaseProduct(Request $request)
    {
        $currentEmailCustomer = Auth::user()->email;
        $newOrders = new Orders();
        $orderSession = session()->get('cart');
        $value = [];
        foreach ($orderSession as $order) {
          $total = $order['quanlity'] * $order['price'];
          $value[] = [
            'code' => rand(0,99999),
            'product' => $order['name'],
            'price' =>(float)$order['price'],
            'quality' => (int)$order['quanlity'],
            'total' => (float)$total,
            'status' => 'Accept',
            'customers_id' => Auth::user()->id
          ];
        }
        try {
          $newOrders->insert($value);
          session()->forget('cart');
        } catch (\Exception $e) {
          \Log::error($e);
        }
        $ordersMail = Orders::all();
        $customer = Auth::user();
        Mail::to($currentEmailCustomer)->send(new MailPurchase($ordersMail,$customer));
        return response()->json(['value' => $value]);
    }
}
