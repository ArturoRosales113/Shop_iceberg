<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'user_id', 'role_id', 'address_id', 'employee_name', 'employee_lastname', 'employee_phone', 'employee_member_since'
 ];
 public function user()
    {
        return $this->belongsTo('App\User');
    }//
 public function role()
    {
        return $this->belongsTo('App\Role');
    }
 public function address()
    {
        return $this->belongsTo('App\Address');
    }
}
