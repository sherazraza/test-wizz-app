<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPricingPackage extends Model
{
    use HasFactory;
    protected $fillable = ['package_name', 'starting_price', 'services'];
    public function getServicesArrayAttribute()
    {
        return json_decode($this->services, true) ?? [];
    }
    // protected $casts = [
    //     'services' => 'array', // if stored as JSON
    // ];
}
