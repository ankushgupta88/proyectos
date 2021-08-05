<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function school()
    {
        return $this->hasOne(College::class);
    }
    
    public function commune()
    {
        return $this->hasOne(Commune::class);
    }
    
    public function course ()
    {
        return $this->hasOne(Course ::class);
    }
}
