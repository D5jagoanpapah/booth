<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Booking;
use App\Models\Booth;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        $users = User::all();
        return view('manage.booking.index', compact('bookings'));
    }


    public function store(Request $request)
    {


        $request->validate([
            'address_id' => 'required|exists:addresses,id',
            'booking_date' => 'required|date',
            'duration' => 'required|integer',
        ]);

        if (!auth()->user()->user_detail->ktp_is_verified) {
            return back()->with('error', 'KTP belum diverifikasi');
        }


        $booth = Booth::find($request->booth_id);
        $address = Address::find($request->address_id);

        $booking = new Booking();
        $booking->user_id = $request->user_id;
        $booking->booth_id = $request->booth_id;
        $booking->address_id = $request->address_id;
        $booking->booking_date = $request->booking_date;
        $booking->duration = $request->duration;
        $booking->status = 'pending';
        $booking->save();

        $payment = new Payment();
        $payment->booking_id = $booking->id;
        $payment->order_id = rand(111111, 999999);
        $payment->amount = $booth->price * $request->duration;
        $payment->payment_date = date('Y-m-d H:i:s');
        $payment->status = 'pending';
        $payment->save();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $payment->order_id,
                'gross_amount' => $payment->amount,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name,
                'last_name' => '',
                'email' => auth()->user()->email,
                'phone' => $address->phone_number,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $payment->snap_token = $snapToken;
        $payment->update();

        return redirect()->route('booth.booking.invoice', $booking->id)->with('success', 'Booking berhasil dibuat');
    }

    public function invoice(Booking $booking)
    {
        $payment = Payment::where('booking_id', $booking->id)->first();

        return view('frontend.payment.invoice', compact('booking', 'payment'));
    }

    
}
