<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CGIHowItWorks extends Model
{
    use HasFactory;
    protected $table    = "cgi_how_it_works";
    protected $fillable = ['title', 'description', 'image'];
}
