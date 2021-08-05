<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    
     /**
     * Get the user that owns the phone.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
