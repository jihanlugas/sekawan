<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    protected $guarded;

    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }
}
