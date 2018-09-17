<?php

namespace App;

use Baum\Node;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Node {

    protected $table = 'categories';

    public function products() {
        return $this->belongsToMany('Product', 'products_categories');
    }

}
