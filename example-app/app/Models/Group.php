<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Shedule::class);
    }
}
