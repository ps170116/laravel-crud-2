<?php

namespace App\Models;
use App\Models\Author;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author',
        'release_date'
    ];
    //every book is written by one author
    public function author()
    {

    
    
        return $this->belongsTo(author::class);
    }
}
