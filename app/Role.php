<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'role_name', 'role_description', 'role_icon_path',
 ];
 // Lista de empleados con esa rol
 public function employees()
    {
        return $this->hasMany('App\Employee');
    }

}
