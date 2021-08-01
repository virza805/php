<?php  

// Adapter Pattern

interface PaymentGateway {
    function sendPayment($payment);
}
class PaymentProcessor {
    private $gateway;
    function __construct(PaymentGateway $pg)
    {
        $this->gateway = $pg;
    }
    function purchaseProduct($amount) {
        $this->gateway->sendPayment($amount);
    }
}

class PayPal implements PaymentGateway{
    function sendPayment($payment){
        echo "{$payment} processed by PayPal";
    }
}

class Stripe {
    function makePayment($amount, $currency=null){
        echo "{$amount} processed by Stripe";
    }
}

class StripeAdapter implements PaymentGateway {
    private $stripe;
    function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }
    function sendPayment($payment){
        $this->stripe->makePayment($payment);
    }
}


$paypal = new PayPal();
$stripe = new Stripe();
$sa = new StripeAdapter($stripe);
$pp = new PaymentProcessor($sa);
$pp->purchaseProduct(56);

