<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CGISection extends Model
{
    use HasFactory;
    protected $table    = "cgi_sections";
    protected $fillable = [
        'main_description', 'main_image',
        'levelup_3d_description', 'levelup_cgi_description',
        'crafting_description',
        'amazing_description', 'amazing_front_image', 'amazing_back_image',
        'motion_description', 'motion_image',
        'reliable_description', 'reliable_image',
    ];
}
