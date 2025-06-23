<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoEditingSection extends Model
{
    protected $fillable = [
        'main_description',
        'main_image',
        'video_service_description',
        'video_service_image',
        'services_description',
        'reliable_description',
        'reliable_image',
        'product_retouch_description_1',
        'product_retouch_video_1a',
        'product_retouch_video_1b',
        'product_retouch_description_2',
        'product_retouch_video_2a',
        'product_retouch_video_2b',
    ];

    // If you later decide to relate services

}
