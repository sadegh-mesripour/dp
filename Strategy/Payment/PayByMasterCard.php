<?php

namespace Strategy\Payment;


class PayByMasterCard implements Payment
{

    public function pay($amount)
    {
        var_dump("do payment by master card ".$amount);
    }
}