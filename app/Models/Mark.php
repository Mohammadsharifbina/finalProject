<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }
    use HasFactory;
}