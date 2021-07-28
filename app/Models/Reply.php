<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $primaryKey = "id";
    protected $keyType = "string";

    protected $fillable = [
        "name",
        "body"
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    use HasFactory;
}
