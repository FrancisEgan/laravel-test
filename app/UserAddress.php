<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;
    const INDEX_FIELDS = [
        'user_id' => 'User ID', 
        'address' => 'Address'
    ];
    const EDITABLE_FIELDS = [
        'user_id' => 'User Id',
        'address' => 'Address',
        'province' => 'Province',
        'city' => 'City',
        'country' => 'Country',
        'postal_code' => 'Postal Code'
    ];
    const SHOW_FIELDS = [
        'id' => 'Id',
        'user_id' => 'User Id',
        'address' => 'Address',
        'province' => 'Province',
        'city' => 'City',
        'country' => 'Country',
        'postal_code' => 'Postal Code'
    ];

    protected $fillable = ['user_id', 'address', 'province', 'city', 'country', 'postal_code'];
}
