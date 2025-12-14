<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class AdminController extends Controller
{
    public function confirm(Booking $booking){
    $booking->update(['status'=>'confirmed']);
    }
}