<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'order_status_id', 'customer_id', 'order_calendar_id', 'order_details',
 ];

    public function order_status()
    {
        return $this->belongsTo('App\OrderStatus');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer' , 'orders');
    }

    public function calendar()
    {
        return $this->belongsTo('App\Calendar');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }  //
}
