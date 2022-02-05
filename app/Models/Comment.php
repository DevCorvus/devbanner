<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "ip",
        "name",
        "email",
        "body"
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function reply() {
        return $this->hasOne(Reply::class);
    }
}
