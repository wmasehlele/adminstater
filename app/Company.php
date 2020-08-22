<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function company_setups() {
        return $this->hasOne('App\CompanySetup');
    }

    public function branches() {
        return $this->hasMany('App\Branch');
    }
}
