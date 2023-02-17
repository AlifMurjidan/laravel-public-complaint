<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
