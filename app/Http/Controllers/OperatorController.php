<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class OperatorController extends Controller
{
    public function process(Booking $booking){
    $booking->update(['status'=>'processed']);
    }
}