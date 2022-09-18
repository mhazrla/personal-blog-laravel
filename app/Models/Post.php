<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'img', 'user_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->as('tags');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        // Many-to-One Relationship with Comment model
        return $this->hasMany(Comment::class);
    }
}
