<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerProfile extends Model
{
    use HasFactory;
    protected $table = ' trainer_profile';

    protected $fillables = [
        'trainer',
        'bio_description',
        'credentials',
        'youtube_url',
        'special_focus_area',
        'number_of_clients',
        'number_of_training',
        'gallery_images',
        'my_venues',
        'is_deleted',
    ];
}
