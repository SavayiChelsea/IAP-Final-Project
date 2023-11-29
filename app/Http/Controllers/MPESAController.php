<?php

namespace App\Http\Controllers;

use App\Mpesa\STKPush;
use App\Models\MpesaSTK;
use Illuminate\Http\Request;
use Iankumu\Mpesa\Facades\Mpesa;

class MPESAController extends Controller
{
    public $result_code = 1;
    public $result_desc = 'An error occurred';

    // Initiate Stk Push Request
    public function STKPush(Request $request)
    {
        try {
            // dumps the contents of the request
            dd($request->all());

            $amount = 5;
            $phoneno = $request->input('phone-number');
            $account_number = 174379;

            $response = Mpesa::stkpush($phoneno, $amount, $account_number);
            $result = json_decode((string)$response, true);

            MpesaSTK::create([
                'merchant_request_id' =>  $result['MerchantRequestID'],
                'checkout_request_id' =>  $result['CheckoutRequestID']
            ]);
    
            return $result;
        } catch (\Exception $e) {
            // Log or handle the exception as needed.
        }

        // return response()->json([
        //     'ResultCode' => $this->result_code,
        //     'ResultDesc' => $this->result_desc
        // ]);
    }

    public function STKConfirm(Request $request)
    {
        $stk_push_confirm = (new STKPush())->confirm($request);

        if ($stk_push_confirm) {
            $this->result_code = 0;
            $this->result_desc = 'Success';
        }

        return response()->json([
            'ResultCode' => $this->result_code,
            'ResultDesc' => $this->result_desc
        ]);
    }
}
