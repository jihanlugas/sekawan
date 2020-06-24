<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertree extends Model
{
    protected $guarded = [];

    const ADMIN_ID = 1;
    const ADMIN_LEVEL = 0;
    const USERTREE_LEVEL_LIMIT = 4;

    public $photo;

    public function user()
    {
        return $this->belongsTo('App\User', 'parent_id', 'id');
    }

    public function photoupload()
    {
        return $this->belongsTo('App\Photoupload', 'photo_id', 'id');
    }
}
