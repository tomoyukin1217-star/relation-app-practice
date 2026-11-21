<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // コメントが属する投稿
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}