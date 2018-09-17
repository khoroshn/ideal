<?php

namespace App;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class ACategory extends Model {

    use ModelTree, AdminBuilder;

    protected $table = 'categories';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('depth');
        $this->setTitleColumn('name');
    }


    public function products() {
        return $this->belongsToMany('Product', 'products_categories');
    }

}
