<?php

namespace Strategy\Payment;


class PayByVisaCard implements Payment
{

    public function pay($amount)
    {
        var_dump("do payment by visa card ".$amount);
    }
}