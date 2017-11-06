<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'supplier_name', 'supplier_contact_name', 'supplier_phone', 'supplier_email', 'supplier_logo_path', 'supplier_description'
    ];

    public function address()
    {
        return $this->morphOne('\App\Address', 'addressable');
    }
    public function products()
    {
       return $this->hasMany('\App\Product' , 'suppliers');
    }
}
