<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertree extends Model
{
    protected $guarded = [];

    const ADMIN_ID = 1;
    const ADMIN_LEVEL = 0;
    const USERTREE_LEVEL_LIMIT = 4;

    public function user()
    {
        return $this->belongsTo('App\User', 'parent_id', 'id');
    }
}
