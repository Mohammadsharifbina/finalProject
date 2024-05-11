<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function classes(){
        return $this->hasMany(Cllass::class);
    }
    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function researches(){
        return $this->hasMany(Research::class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function committee(){
        return $this->hasMany(Commettee::class);
    }
    public function news(){
        return $this->hasMany(News::class);
    }
    use HasFactory;
}
