<?php

namespace App\Models;

use App\Models\Tanggapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masyarakat extends Model
{
    use HasFactory;

    // protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'user_id'
    ];

    // Many to One Relationship
    public function masyarakat()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
