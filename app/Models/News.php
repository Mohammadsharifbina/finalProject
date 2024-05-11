<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }
    use HasFactory;
}
