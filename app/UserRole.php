<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;
    const INDEX_FIELDS = [
        'id' => 'Role Id', 
        'label' => 'Label'
    ];
    const EDITABLE_FIELDS = [
        'label' => 'Label'
    ];
    const SHOW_FIELDS = [
        'id' => 'Role Id',
        'label' => 'Label'
    ];

    protected $fillable = ['label'];
}
