<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function books(){
        return $this->hasMany(Book::class);
    }
    public function researcher(){
        return $this->hasMany(Research::class);
    }
    public function committees(){
        return $this->belongsToMany(Commettee::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function comment(){
        return $this->belongsTo(Comment::class);
    }
    public function skills(){
        return $this->hasMany(Skill::class);
    }
    public function projects(){
        return $this->hasMany(TeacherProject::class);
    }
    use HasFactory;

}
