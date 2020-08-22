<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    public function roles() {
        return $this->belongsTo('App\Role');
    }

    public function permissions() {
        return $this->belongsTo('App\Permission');
    }
}
