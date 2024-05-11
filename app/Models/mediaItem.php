<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mediaItem extends Model
{
    protected $fillable = ['tile','url'];
    public function mediaCollection(){
        return $this->belongsTo(mediaCollection::class);
    }
    use HasFactory;
}
