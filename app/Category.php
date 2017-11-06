<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'category_name', 'category_description', 'category_icon_path',
 ];
 // Lista de productos con esa categoría
 public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }//
}
