<?php
declare(strict_types=1);
namespace App\Services;

use Ramsey\Uuid\Type\Decimal;

class PaymentService
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

    public function run(int|float $amount=100):array|string
    {
        $data = [
            "amount" => $amount,
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
            'return_url' => route('payment.retour'),
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
        return $url = $this->messageValue['data']['payment_url']??$this->messageValue;

    }
}
