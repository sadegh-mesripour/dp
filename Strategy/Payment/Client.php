<?php

namespace Strategy\Payment;

require_once "../../vendor/autoload.php";

class Client
{
    public function pay($amount, Payment $payment)
    {
        $payment->pay($amount);
    }

    public function choosePaymentWay($amount)
    {
        switch ($amount) {
            case ($amount <= 100) :
                $result = new PayByPaypal();
                break;
            case ($amount <= 200 && $amount > 100) :
                $result =  new PayByMasterCard();
                break;
            default :
                $result = new PayByVisaCard();
        }

        return $result;
    }
}

$client = new Client();
$amount = 450;
$payWay = $client->choosePaymentWay($amount);
$client->pay($amount, $payWay);
