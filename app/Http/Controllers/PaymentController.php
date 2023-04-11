<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use CinetPay\CinetPay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        $amount = $request->input('amount');
        $description = $request->input('description');
        $reference = $request->input('reference');

        $cinetpay = new CinetPay(env('CINETPAY_API_KEY'), env('CINETPAY_SITE_ID'), env('CINETPAY_SITE_NAME'));

        $params = [
            'amount' => $amount,
            'currency' => 'XOF',
            'description' => $description,
            'reference' => $reference,
            'notify_url' => route('payment.notify'),
            'return_url' => env('CINETPAY_RETURN_URL')
        ];

        $result = $cinetpay->transaction($params);

        if ($result['code'] == '000') {
            return redirect($result['data']['payment_url']);
        } else {
            return redirect()->back()->with('error', $result['message']);
        }
    }

    public function notify(Request $request)
    {
        $cinetpay = new CinetPay(env('CINETPAY_API_KEY'), env('CINETPAY_SITE_ID'), env('CINETPAY_SITE_NAME'));

        $result = $cinetpay->checkTransactionStatus($request->all());

        if ($result['code'] == '000') {
            // paiement réussi, traiter la commande
        } else {
            // paiement échoué, gérer l'erreur
        }
    }
}
