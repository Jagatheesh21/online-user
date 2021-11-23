<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    
}