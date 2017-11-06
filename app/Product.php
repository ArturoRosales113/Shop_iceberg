<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'product_name', 'supplier_id', 'category_id', 'product_model', 'product_code', 'product_description', 'product_price', 'product_availability',
 ];
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function supplier()
    {
        return $this->belongsTo('\App\Supplier');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    } //
}
