<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Photo extends Model
{
    use Notifiable;

    protected $fillable = [
        'profile_picture', 'additional_photos'
    ];
}