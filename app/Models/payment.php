<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function booth()
    {
        return $this->belongsTo(Booth::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
