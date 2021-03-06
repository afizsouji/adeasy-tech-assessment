<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 1;
    const MEDIA_OWNER = 2;
    const ADVERTISER = 3;

    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }
}
