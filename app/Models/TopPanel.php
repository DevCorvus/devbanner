<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopPanel extends Model
{
    use HasFactory;
    
    protected $table = "top_panel";

    protected $fillable = [
        "content"
    ];
}
