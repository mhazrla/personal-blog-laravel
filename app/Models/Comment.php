<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'post_id'];

    public function post()
    {
        // Many-to-One Relationship with Post model
        return $this->belongsTo(Post::class);
    }
}
