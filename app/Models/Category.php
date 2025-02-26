<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];
    protected static function booted()
    {
        static::creating(function ($category) {
            // Jika slug tidak diisi, buat slug dari nama kategori
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
