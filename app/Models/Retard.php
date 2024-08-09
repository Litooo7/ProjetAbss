<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'minutes',
        'reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
