<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchUser extends Model
{
    public function branches() {
        return $this->belongsTo('App\Branch');
    }
    
    public function users() {
        return $this->belongsTo('App\User');
    }
}
