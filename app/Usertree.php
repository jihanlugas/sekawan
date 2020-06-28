<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertree extends Model
{
    protected $guarded = [];

    const ADMIN_ID = 1;
    const ADMIN_LEVEL = 0;
    const USERTREE_LEVEL_LIMIT = 4;

    const STATUS_PHOTO_NO_DATA = 0;
    const STATUS_PHOTO_WAITING = 10;
    const STATUS_PHOTO_APPROVED = 20;
    const STATUS_PHOTO_AUTOMATIC_APPROVED = 30;
    const STATUS_PHOTO_REJECTTED = 50;

    const STATUS_PHOTO_NO_DATA_NAME = 'No data';
    const STATUS_PHOTO_WAITING_NAME = 'Waiting';
    const STATUS_PHOTO_APPROVED_NAME = 'Approved';
    const STATUS_PHOTO_AUTOMATIC_APPROVED_NAME = 'Approved';
    const STATUS_PHOTO_REJECTTED_NAME = 'Reject';

    public static $status_photo = [
        self::STATUS_PHOTO_NO_DATA => self::STATUS_PHOTO_NO_DATA_NAME,
        self::STATUS_PHOTO_WAITING => self::STATUS_PHOTO_WAITING_NAME,
        self::STATUS_PHOTO_APPROVED => self::STATUS_PHOTO_APPROVED_NAME,
        self::STATUS_PHOTO_AUTOMATIC_APPROVED => self::STATUS_PHOTO_AUTOMATIC_APPROVED_NAME,
        self::STATUS_PHOTO_REJECTTED => self::STATUS_PHOTO_REJECTTED_NAME,
    ];

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
