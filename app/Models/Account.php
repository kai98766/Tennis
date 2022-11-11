<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Account extends Model
{
    protected $fillable = [
            'sex',
            'age',
            'user_id',
    ];
    use HasFactory;
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
