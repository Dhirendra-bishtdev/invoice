<?php

namespace FI\Events;

use FI\Modules\Payments\Models\Payment;
use Illuminate\Queue\SerializesModels;

class PaymentCreated extends Event
{
    use SerializesModels;

    public function __construct(Payment $payment, $checkEmailOption = true)
    {
        $this->payment          = $payment;
        $this->checkEmailOption = $checkEmailOption;
    }
}
