<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commettee;

class Book extends Model
{
    public function curriculum(){
        return $this->belongsTo(Curriculum::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function commettee(){
        return $this->belongsTo(Commettee::class);
    }
    use HasFactory;
}
