<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

   // Relationship to Jobs (A category can be associated with multiple jobs)
    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
