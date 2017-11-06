<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'day_date', 'month', 'day_of_month', 'day_number', 'day_of_the_week', 'day_off',
     ];
}
