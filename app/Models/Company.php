<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Relationship to job (A company has many jobs)
     public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
