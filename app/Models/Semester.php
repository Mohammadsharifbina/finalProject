<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    public function Cllass(){
        return $this->belongsTo(Cllass::class);
    }
    public function curriculum(){
        return $this->belongsTo(Curriculum::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    use HasFactory;
}
