<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaHariIni extends Model
{
    use HasFactory;

    protected $table = 'hargahariini';
    
    protected $fillable = ['id_hotel', 'id_kamar', 'harga', 'available_room', 'tanggal'];
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_hotel');
    }
}
