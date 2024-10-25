<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeline extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'location_id',
        'instructor_id',
        'activity_ids',
        'day',
        'date',
        'start_time',
        'end_time',
        'image',
        'monthly_pass_price',
        'single_pass_price',
        'status',
    ];
}
