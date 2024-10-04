<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecializationCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillables = [
        'specialization_name',
        'status',
    ];
}
