<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Room;
use CinetPay\CinetPay;
use Illuminate\Http\Request;
use App\Services\PaymentService;

class PaymentController extends Controller
{

    public function __construct(
        private PaymentService $paymentService
    )
    {

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

        return redirect()->back();
    }


    public function testGenerator(Request $request)
    {
        return redirect($this->paymentService->run());

    }
    public function test(Request $request)
    {
        $amount = 0;
        $selectedIds = explode(',', $request->input('selected_ids'));
        foreach ($selectedIds as $key => $value) {
            $roomAmount = (Room::query()->find($value))->price;

           $amount += ($roomAmount * (int)$request->input('quantity'));
        }

        return redirect(
            is_array($this->paymentService->run($amount))
            ? '/'
            : $this->paymentService->run($amount)
        );

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
    public function retour(Request $request)
    {
        return redirect()->to('/');
    }
}
