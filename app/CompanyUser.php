<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    public function companies() {
        return $this->belongsTo('App\Company');
    }
    
    public function users() {
        return $this->belongsTo('App\User');
    }
}
