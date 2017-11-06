<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
 use Notifiable;
 protected $guard = 'frontweb';
 /**use Notifiable;
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'email', 'password',
 ];
 public function customer_profile ()
    {
        return $this->hasOne('App\CustomerProfile');
    }
 public function orders()
    {
        return $this->hasMany('App\Order');
    }//
}
