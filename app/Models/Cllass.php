<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cllass extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function semesters(){
        return $this->hasMany(Semester::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    use HasFactory;
}
