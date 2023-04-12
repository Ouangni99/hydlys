<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use CinetPay\CinetPay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    private array|string $messageValue;

    public function getMessageValue()
    {
        return $this->messageValue;
    }

    public function setMessageValue($value)
    {
        $this->messageValue = $value;
    }

    public function checkout(Request $request)
    {

        $amount = $request->input('amount');
        //dd($amount);
        $description = $request->input('description') ?? '';
        $reference = $request->input('reference') ?? '';

        $cinetpay = new CinetPay(
            siteId: env('CINETPAY_SITE_ID'),
            apiKey: env('CINETPAY_API_KEY'),
            mode: 'PROD',
        );

        //dd($cinetpay);
        $params = [
            'amount' => $amount,
            'currency' => 'XOF',
            'description' => $description,
            'reference' => $reference,
            'notify_url' => route('payment.notify'),
            'return_url' => env('CINETPAY_RETURN_URL')
        ];


//        $result = $cinetpay->transaction($params);
        /*
                if ($result['code'] == '000') {
                    return redirect($result['data']['payment_url']);
                } else {
                    return redirect()->back()->with('error', $result['message']);
                }*/

        return redirect()->back();
    }


    public function testGenerator(Request $request)
    {
//        $request->input('amount')
        $data = [
            "amount" => 100,
            "apikey" => '66266634362af7b2f86d610.12620568',
            "site_id" => '255808',
            "currency" => "XOF",
            "alternative_currency" => "EUR",
            "transaction_id" => "TRXNID_" . rand(0000, 99999999),
            "customer_email" => "samuel.blay@amgs.africa",
            "customer_phone_number" => "0778219184",
            "customer_address" => "BP502",
            "customer_city" => "Abidjan",
            "customer_country" => "CI",
            "customer_state" => "CI",
            "customer_zip_code" => "00225",
            "description" => "PRODUIT TEST COUVERTURE MALADIE",
            "customer_name" => "Nom utilisateur",
            "customer_surname" => "Prenom utilisateur",
            'notify_url' => route('payment.notify'),
            'return_url' => 'http://hydlys.next-market.shop/'
        ];


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-checkout.cinetpay.com/v2/payment",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
            ],

        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            $this->messageValue = "cURL Error #:" . $err;
        } else {
            $this->messageValue = json_decode($response, TRUE);
        }
        $url = $this->messageValue['data']['payment_url'];
        //return view('paiement', ['message' => $this->messageValue]);
        return redirect($url);

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
