<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration',
        'course_fee',
        'difficulty_level',
    ];

    protected function casts(): array 
    {
        return [
            'is_active' => 'boolean',
            'fee' => 'decimal:2',
        ];
    }
};