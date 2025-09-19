<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listing';

    protected $fillable = [
        'title',
        'location',
        'description',
        'compensation',
        'employer_id'
    ];

    // to remove annoying fillable warning
    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
