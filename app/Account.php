<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "users";

    public function motel() {
        return $this->hasMany('App\Motel', 'account_id', 'id');
    }
}
