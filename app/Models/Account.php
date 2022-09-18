<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'username'];

    public function user()
    {
        // One-One Relationship to User Model
        return $this->belongsTo(User::class);
    }
}
