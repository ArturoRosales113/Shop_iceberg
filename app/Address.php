<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'address_street', 'address_neighbourhood', 'address_city', 'address_state', 'address_postal_code', 'addressable_id', 'addressable_type', 'address_lat', 'address_long',
    ];

    public function addressable()
    {
     return $this->morphTo();
    }//
}
