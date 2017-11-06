<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'customer_id', 'address_id', 'customer_name', 'customer_last_name', 'customer_phone', 'customer_cellphone', 'customer_profile_picture'
 ];
 public function customer()
    {
        return $this->belongsTo('App\Customer','id','customer_id');
    }
 public function address()
    {
        return $this->belongsTo('App\Address','id','address_id');
    }//
}
