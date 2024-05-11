<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    use HasFactory;
}
