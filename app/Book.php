<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use SoftDeletes;
    use Sortable;

    protected $fillable = ['title', 'author', 'description', 'isbn', 'publisher', 'published_year', 'buyURL', 'imgURL'];
    protected $date = ['updated_at', 'created_at', 'deleted_at'];
}
