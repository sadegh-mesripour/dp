<?php

namespace Strategy\Payment;


interface Payment
{
    public function pay($amount);
}