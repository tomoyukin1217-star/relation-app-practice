<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // コメントとのリレーション
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // タグとのリレーション
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}