<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapans';

    protected $fillable = [
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'id_petugas'
    ];

    // public function tanggapan()
    // {
    //     return $this->belongsTo(Pengaduan::class, 'id_pengaduan', 'id');
    // }
}
