<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

Class User  extends Eloquent
{
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];

    public function setPasswordAttribute($value)
    {
        if (!empty($value)){
            $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT); 
        }
    }
}
