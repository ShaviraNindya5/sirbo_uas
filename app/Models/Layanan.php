<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    /**
     * Kolom yang boleh diisi mass assignment
     */
    protected $fillable = [
        'nama',
        'kategori',
        'harga'
    ];

    /**
     * Relasi: 1 layanan punya banyak booking
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}