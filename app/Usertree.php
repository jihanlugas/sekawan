<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertree extends Model
{
    protected $guarded = [];

    const ADMIN_ID = 1;
    const ADMIN_LEVEL = 0;
    const USERTREE_LEVEL_LIMIT = 4;
    const LIMIT_WAITING_DAY = 3; // 3 Day

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

    const STATUS_PHOTO_NO_DATA_TAG = '<span class="badge badge-secondary">' . self::STATUS_PHOTO_NO_DATA_NAME . '</span>';
    const STATUS_PHOTO_WAITING_TAG = '<span class="badge badge-primary">' . self::STATUS_PHOTO_WAITING_NAME . '</span>';
    const STATUS_PHOTO_APPROVED_TAG = '<span class="badge badge-success">' . self::STATUS_PHOTO_APPROVED_NAME . '</span>';
    const STATUS_PHOTO_AUTOMATIC_APPROVED_TAG = '<span class="badge badge-success">' . self::STATUS_PHOTO_AUTOMATIC_APPROVED_NAME . '</span>';
    const STATUS_PHOTO_REJECTTED_TAG = '<span class="badge badge-danger">' . self::STATUS_PHOTO_REJECTTED_NAME . '</span>';

    public static $status_photo = [
        self::STATUS_PHOTO_NO_DATA => self::STATUS_PHOTO_NO_DATA_NAME,
        self::STATUS_PHOTO_WAITING => self::STATUS_PHOTO_WAITING_NAME,
        self::STATUS_PHOTO_APPROVED => self::STATUS_PHOTO_APPROVED_NAME,
        self::STATUS_PHOTO_AUTOMATIC_APPROVED => self::STATUS_PHOTO_AUTOMATIC_APPROVED_NAME,
        self::STATUS_PHOTO_REJECTTED => self::STATUS_PHOTO_REJECTTED_NAME,
    ];

    public static $status_photo_tag = [
        self::STATUS_PHOTO_NO_DATA => self::STATUS_PHOTO_NO_DATA_TAG,
        self::STATUS_PHOTO_WAITING => self::STATUS_PHOTO_WAITING_TAG,
        self::STATUS_PHOTO_APPROVED => self::STATUS_PHOTO_APPROVED_TAG,
        self::STATUS_PHOTO_AUTOMATIC_APPROVED => self::STATUS_PHOTO_AUTOMATIC_APPROVED_TAG,
        self::STATUS_PHOTO_REJECTTED => self::STATUS_PHOTO_REJECTTED_TAG,
    ];

    public $photo;

    public function parent()
    {
        return $this->belongsTo('App\User', 'parent_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function photoupload()
    {
        return $this->belongsTo('App\User', 'photo_id', 'id');
    }

    public function price()
    {
        return $this->belongsTo('App\Price', 'price_id', 'id');
    }
}
