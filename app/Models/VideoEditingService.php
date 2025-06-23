<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoEditingService extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    // If you relate it to VideoEditingSection later

}
