<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * Kolom yang boleh diisi
     */
    protected $fillable = [
        'user_id',
        'layanan_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    /**
     * Relasi ke user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke layanan
     */
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}