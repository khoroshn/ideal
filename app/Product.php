<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $table = 'products';

    public function categories() {
        return $this->belongsToMany('App\Category', 'products_categories');
    }

    public function scopeCategorized($query, Category $category=null) {
        if ( is_null($category) ) return $query->with('categories');

        $categoryIds = $category->getDescendantsAndSelf()->pluck('id');

        return $query->with('categories')
            ->join('products_categories', 'products_categories.product_id', '=', 'products.id')
            ->whereIn('products_categories.category_id', $categoryIds);
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function tags(){

        return $this->belongsToMany('App\Tag')->withTimestamps();

    }

    public function groups(){

        return $this->belongsToMany('App\Group');

    }

    public function grouped(){

        return $this->morphTo();

    }

    public function sizes(){

        return $this->belongsToMany('App\Size');

    }
    public function colors(){

        return $this->belongsToMany('App\Color');

    }

}
