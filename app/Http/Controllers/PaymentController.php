<?php

namespace App\Http\Controllers;

use App\Services\SelixService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $selix;

    public function __construct(SelixService $selix)
    {
        $this->selix = $selix;
    }

    public function createPayment(Request $request)
    {
        // Validate the request
        $request->validate([
            'amount' => 'required|numeric',
        ]);

        // Create a payment
        $payment = $this->selix->getClient()->payment()->create([
            'amount' => $request->input('amount'),
            // Add other required payment fields
        ]);

        // Redirect the user to the payment URL
        return redirect($payment['url']);
    }
}
