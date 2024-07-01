<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    use HasFactory;
}
