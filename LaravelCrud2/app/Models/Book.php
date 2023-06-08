<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //every book is written by one author
    public function author()
    {
        return $this->belongsTo(author::class);
    }
}
