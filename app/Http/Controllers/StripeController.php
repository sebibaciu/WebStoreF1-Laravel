<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $viewData["subtitle"] = "Add Funds to Your F1Store Account";
        return view('stripe')->with("viewData", $viewData);;
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Plata Confirmata"
        ]);

        Session::flash('success', 'Payment successful!');

        $newBalance = Auth::user()->getBalance() + 100;
            Auth::user()->setBalance($newBalance);
            Auth::user()->save();

        return back();
    }
}
