<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';
    /**
     * Define guarded columns
     *
     * @var array
     */
    protected $guarded = array('id');
}