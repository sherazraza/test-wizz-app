<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'who_description',
        'who_quote',
        'who_image',
        'who_images',
        'how_started_description',
        'how_started_image',
        'together_description',
        'goal_description',
        'team_description',
    ];

    protected $casts = [
        'who_images' => 'array', // so you can store multiple images as JSON
    ];
}
