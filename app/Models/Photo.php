<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 07/11/2017
 * Time: 14:26
 */

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