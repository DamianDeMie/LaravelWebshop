<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Categories extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image'];

    public function showProducts()
    {
        return $this->hasMany('App\Products', 'category_id');
    }
}
