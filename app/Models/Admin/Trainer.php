<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainer';

    protected $fillables = [
        'email',
        'password',
        'full_name',
        'phone',
        'is_trainer',
        'status',
        'is_deleted',
    ];
}
