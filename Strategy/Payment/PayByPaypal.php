<?php

namespace Strategy\Payment;


class PayByPaypal implements Payment
{

    public function pay($amount)
    {
        var_dump("do payment by paypal ".$amount);
    }
}