<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function index(){
        return view('stripe.index');
    }
  public function checkout()
    {
        Stripe::setApiKey(config('stripe.sk'));
        
        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => "technicien subscription",
                            "description" => "to listent to our music please pay for that"
                        ],
                        'unit_amount'  => 100000,
                    ],
                    'quantity'   => 3,
                ],

            ],
            'mode'        => 'payment', // the mode  of payment
            'success_url' => route('dashboard'), // route when success 
            'cancel_url'  => route('stripe.payement'), // route when  failed or canceled
        ]);

        return redirect()->away($session->url);
    }
}
