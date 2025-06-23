<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_description',
        'hero_image_1',
        'hero_image_2',
        'hero_image_3',
        'hero_image_4',
        'client_title',
        'client_description',
        'client_images',
        'brands',
        'employees',
        'sft_space',
        'delivered_photos',
        'review_name',
        'review_designation',
        'review_text',
        'review_image',
        'company_logo',
        'video_editing_title',
        'video_editing_description',
        'video_editing_image',
        'cgi_title',
        'cgi_description',
        'cgi_videos',
    ];

    protected $casts = [
        'client_images' => 'array',
        'cgi_videos'    => 'array',
    ];
}
