<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('manage.payment.index', compact('payments'));
    }
    
    public function detail_booking(Payment $payment)
    {
        $booking = $payment->booking; 
        return view('manage.payment.detail_booking', compact('payment', 'booking'));
    }
    public function finish(Request $request)
    {
        $payment = Payment::find($request->payment_id);
        $payment->status = 'paid';
        $payment->update();

        return response()->json(['success' => true, 'data' => $payment]);
    }
}
