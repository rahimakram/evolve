<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerDetail extends Model
{
    use HasFactory;
    protected $table = 'trainer_detail';

    protected $fillables = [
        'trainer',
        'work_title',
        'special_focus_area',
        'classes',
        'certifications',
        'languages',
        'experience',
        'education',
        'photo',
        'is_deleted',
    ];
}
