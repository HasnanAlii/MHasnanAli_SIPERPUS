<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'category'
    ];

    // Relasi many-to-many dengan Book
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category');
    }
}