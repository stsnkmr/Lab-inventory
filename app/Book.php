<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use Sortable;

    protected $fillable = ['title', 'author', 'description', 'isbn', 'publisher', 'buyURL', 'imgURL'];
    protected $date = ['published_date', 'updated_at', 'created_at'];
}
