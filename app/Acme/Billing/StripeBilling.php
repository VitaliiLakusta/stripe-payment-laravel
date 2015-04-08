<?php namespace Acme\Billing;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Config;

class StripeBilling implements BillilngInterface {

    public function __construct()
    {
        Stripe::setApiKey(Config::get('development.stripe.secret_key'));
    }

    public function charge(array $data)
    {
        try
        {
            $customer = Customer::create([
                'card' => $data['token'],
                'description' => $data['email']
            ]);

            Charge::create([
                'customer' => $customer->id,
                'amount' => 1000, // $10
                'currency' => 'usd',
            ]);

            return $customer->id;
        }

        catch(Stripe_CardErr $e)
        {
            // card was declined
            dd('card was declined');
        }

    }

}