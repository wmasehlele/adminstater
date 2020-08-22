<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function branch_setups() {
        return $this->hasOne('App\BranchSetup');
    }

    public function companies() {
        return $this->belongsTo('App\Copmany');
    }
}
