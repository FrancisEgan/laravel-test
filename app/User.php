<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['user_roles_id', 'username', 'email'];
    const INDEX_FIELDS = [
        'username' => 'Username', 
        'email' => 'Email'
    ];
    const EDITABLE_FIELDS = [
        'user_roles_id' => 'Role Id',
        'username' => 'Username',
        'email' => 'Email'
    ];
    const SHOW_FIELDS = [
        'id' => 'Id',
        'user_roles_id' => 'Role Id',
        'username' => 'Username', 
        'email' => 'Email',
        'created_at' => 'Created At',
        'updated_at' => 'Updated At'
    ];
}
