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
            $amount = 1;
            $phoneno = $request->input('phone-number');
            $account_number = 174379;

            $response = Mpesa::stkpush($phoneno, $amount, $account_number, $callbackurl = env('MPESA_CALLBACK_URL'));
            $result = json_decode((string)$response, true);

            if (isset($result['MerchantRequestID'], $result['CheckoutRequestID'])) {
                MpesaSTK::create([
                    'merchant_request_id' =>  $result['MerchantRequestID'],
                    'checkout_request_id' =>  $result['CheckoutRequestID']
                ]);

                $this->result_code = 0;
                $this->result_desc = 'Success';
            } else {
                // Log or handle the case where the expected keys are not present in the response.
            }
        } catch (\Exception $e) {
            // Log or handle the exception as needed.
        }

        return response()->json([
            'ResultCode' => $this->result_code,
            'ResultDesc' => $this->result_desc
        ]);
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
