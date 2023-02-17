<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'level',
        'user_id'
    ];

    // Many to One Relationship
    public function petugas()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
