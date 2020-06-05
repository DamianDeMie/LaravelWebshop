<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
use DB;

class Categories extends Model
{
    protected $fillable = ['name', 'image'];
}
