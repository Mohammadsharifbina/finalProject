<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
    public function cllass(){
        return $this->belongsTo(Cllass::class);
    }
    public function marks(){
        return $this->hasMany(Mark::class);
    }
    use HasFactory;
}
