<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
//use App\Http\Controllers\Auth;
use Illuminate\Http\RedirectResponse;




class BookingController extends Controller
{
    public function store(Request $r)
    {
        Booking::create([
            'user_id' => $r->user()->id,
            'layanan_id' => $r->layanan_id,
            'tanggal_mulai' => $r->mulai,
            'tanggal_selesai' => $r->selesai,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Booking berhasil dibuat');
    }
}