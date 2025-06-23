<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'base_price',
        'base_price_description',
    ];
}
