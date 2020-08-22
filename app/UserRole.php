<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public function users() {
        return $this->belongsTo('App\User');
    }

    public function roles() {
        return $this->belongsTo('App\Role');
    }
}
