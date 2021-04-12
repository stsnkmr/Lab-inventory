<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quantity',
        'selling_user_id',
        'price',
        'image_path',
        'description'
    ];

    public function selling_user()
    {
        return $this->belongsTo('App\User', 'selling_user_id');
    }
}
