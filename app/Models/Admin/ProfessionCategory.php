<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfessionCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profession_name',
        'status',
    ];
}
