<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Specify the fields that are mass assignable
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'published_date',
        'genre',
    ];
}
