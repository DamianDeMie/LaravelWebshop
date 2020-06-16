<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
use DB;

class Categories extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image'];
}
