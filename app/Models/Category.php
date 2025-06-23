<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_cat', 'photo', 'is_active'];

    // 🔁 Parent category relationship
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_cat');
    }

    // 🔁 Child categories relationship
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_cat');
    }
}
