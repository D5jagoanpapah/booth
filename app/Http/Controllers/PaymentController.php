<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('manage.payment.index');
    }

    public function finish(Request $request)
    {
        $payment = Payment::find($request->payment_id);
        $payment->status = 'paid';
        $payment->update();

        return response()->json(['success' => true, 'data' => $payment]);
    }
}
