<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commettee extends Model
{
    public function books(){
        return $this->hasMany(Book::class);
    }
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    use HasFactory;
}
