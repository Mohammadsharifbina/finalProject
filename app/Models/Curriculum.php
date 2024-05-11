<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public function semester(){
        return $this->hasOne(Semester::class);
    }
    public function books(){
        return $this->hasMany(Book::class);
    }
    use HasFactory;
}
