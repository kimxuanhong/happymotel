<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motel extends Model
{
    protected $table = "motels";

    public function account()
    {
        return $this->belongsTo('App\Account', 'account_id', 'id');
    }

    public function nameToUpper()
    {
        echo strtoupper($this->name);
    }

    public function district()
    {
        return $this->belongsTo('App\StaticData', 'district_id', 'id');
    }
}
