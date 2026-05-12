<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Karim007\LaravelNagad\Facade\NagadPayment;
use Karim007\LaravelNagad\Facade\NagadRefund;

use App\CPU\CartManager;
use App\CPU\Helpers;
use App\CPU\OrderManager;
use App\Model\BusinessSetting;
use App\Model\Currency;
use App\Model\Order;
use App\Model\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PHPUnit\Exception;


class NagadController extends Controller
{

    public function pay(Request $request)
    {
        
        $currency_model = Helpers::get_business_settings('currency_model');
        if ($currency_model == 'multi_currency') {
            $currency_code = 'USD';
        } else {
            $default = BusinessSetting::where(['type' => 'system_default_currency'])->first()->value;
            $currency_code = Currency::find($default)->code;
        }

        $discount = session()->has('coupon_discount') ? session('coupon_discount') : 0;
        $value = CartManager::cart_grand_total() - $discount;
        $tran = OrderManager::gen_unique_idfornagad();
 
    
        $amount = round($value, 2);
        
        $trx_id = uniqid();
        
        //if you have multipule/dynamic callback url then uncomment bellow line and use dynamic callbackurl
        //otherwise don't do anything
        //config(['nagad.callback_url' => env('NAGAD_CALLBACK_URL')]);

        $response = NagadPayment::create($amount, $trx_id); // 1st parameter is amount and 2nd is unique invoice number

        //$response = NagadPayment::create($amount, $trx_id,1); // additional last parameter for manage difference account

        if (isset($response) && $response->status == "Success") {
            return redirect()->away($response->callBackUrl);
        }
        return redirect()->back()->with("error-alert", "Invalid request try again after few time later");
    }



    public function callback(Request $request)
    {
        if (!$request->status && !$request->order_id) {
            return response()->json([
                "error" => "Not found any status"
            ], 500);
        }

        if (config("nagad.response_type") == "json") {
            return response()->json($request->all());
        }

        $verify = NagadPayment::verify($request->payment_ref_id); // $paymentRefId which you will find callback URL request parameter

        if (isset($verify->status) && $verify->status == "Success") {
            return $this->success($verify->orderId);
        } else {
            return $this->fail($verify->orderId);
        }
    }


    public function refund($paymentRefId)
    {
        $refundAmount = 1000;
        $verify = NagadRefund::refund($paymentRefId, $refundAmount);
        //$verify = NagadRefund::refund($paymentRefId,$refundAmount,'','sss',1); last parameter for manage account

        if (isset($verify->status) && $verify->status == "Success") {
            return $this->success($verify->orderId);
        } else {
            return $this->fail($verify->orderId);
        }
    }

    public function success($transId)
    {
        $unique_id = OrderManager::gen_unique_id();
        $order_ids = [];
        foreach (CartManager::get_cart_group_ids() as $group_id) {
            $data = [
                'payment_method' => 'Nagad',
                'order_status' => 'confirmed',
                'payment_status' => 'paid',
                'transaction_ref' => session('transaction_ref'),
                'order_group_id' => $unique_id,
                'cart_group_id' => $group_id
            ];
            $order_id = OrderManager::generate_order($data);
            array_push($order_ids, $order_id);
        }
        
        CartManager::cart_clean();
      
       return view('web-views.checkout-complete', compact('transId'));
    }

    public function fail($transId)
    {
        return view('web-views.payment-failed', compact('transId'));
    }
}
