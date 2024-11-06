<?php


// app/Models/Book.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'author', 'year', 'publisher', 'city', 'cover', 'bookshelf_id'
    ];

    // Relasi many-to-many dengan Category
    public function category()
    {
        return $this->belongsToMany(Category::class, 'category');
    }
    
}