<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticData extends Model
{
    protected $table = "static_datas";

    public function motel()
    {
        return $this->hasMany('App\Motel', 'district_id', 'id');
    }
}
