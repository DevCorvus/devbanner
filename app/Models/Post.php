<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "url",
        "description",
        "title",
        "intro",
        "content",
        "image_url",
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function topics() {
        return $this->belongsToMany(Topic::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
