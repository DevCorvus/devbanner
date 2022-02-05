<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "color"
    ];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
