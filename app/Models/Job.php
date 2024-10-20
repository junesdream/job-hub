<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'salary',
        'location',
        'company_id',
        'category_id',
        'posted_at',
    ];

    // Relationship to Company (A job belongs to a company)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Relationship to Categories (A job can belong to multiple categories)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
