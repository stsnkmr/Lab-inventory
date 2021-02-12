<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'description', 'isbn', 'publisher', 'buyURL', 'imgURL'];
    protected $date = ['published_date', 'updated_at', 'created_at'];
}
