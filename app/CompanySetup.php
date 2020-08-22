<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanySetup extends Model
{
    public function companies() {
        return $this->belongsTo('App\Company');
    }
}
