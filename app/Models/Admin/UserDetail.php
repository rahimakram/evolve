<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillables = [
        'user_id',
        'specialization',
        'contact',
        'description',
        'special_focus_area',
        'classes',
        'certifications',
        'languages',
        'experience',
        'education',
    ];
}
