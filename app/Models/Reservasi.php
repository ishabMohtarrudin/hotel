<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'id_reservasi',
        'customer_id',
        'tanggal',
        'tanggal_mulai',
        'tanggal_akhir',
        'id_hotel',
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'customer_id');
    }

    public function hotel()
    {
        return $this->belongsTo(HargaHariIni::class, 'id_hotel', 'id_hotel');
    }
}
