<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usertree extends Model
{
    protected $guarded = [];

    const ADMIN_ID = 1;
    const ADMIN_LEVEL = 0;
    const USERTREE_LEVEL_LIMIT = 4;
    const LIMIT_WAITING_MINUTE = 3; // 3 Minutes
//    const LIMIT_WAITING_MINUTE = 60 * 24; // 60 menit * 24 jam = 1 hari

    const STATUS_PHOTO_NO_DATA = 0;
    const STATUS_PHOTO_WAITING = 10;
    const STATUS_PHOTO_APPROVED = 20;
    const STATUS_PHOTO_AUTOMATIC_APPROVED = 30;
    const STATUS_PHOTO_REJECTTED = 50;

    const STATUS_PHOTO_NO_DATA_NAME = 'Tidak Ada Data';
    const STATUS_PHOTO_WAITING_NAME = 'Menunggu Konfirmasi';
    const STATUS_PHOTO_APPROVED_NAME = 'Diterima';
    const STATUS_PHOTO_AUTOMATIC_APPROVED_NAME = 'Diterima Otomatis';
    const STATUS_PHOTO_REJECTTED_NAME = 'Ditolak';

    const STATUS_PHOTO_NO_DATA_TAG = '<span class="inline-block rounded-full px-3 py-1 text-lg font-bold text-gray-100 bg-gray-600">' . self::STATUS_PHOTO_NO_DATA_NAME . '</span>';
    const STATUS_PHOTO_WAITING_TAG = '<span class="inline-block rounded-full px-3 py-1 text-lg font-bold text-gray-100 bg-blue-600">' . self::STATUS_PHOTO_WAITING_NAME . '</span>';
    const STATUS_PHOTO_APPROVED_TAG = '<span class="inline-block rounded-full px-3 py-1 text-lg font-bold text-gray-100 bg-green-400">' . self::STATUS_PHOTO_APPROVED_NAME . '</span>';
    const STATUS_PHOTO_AUTOMATIC_APPROVED_TAG = '<span class="inline-block rounded-full px-3 py-1 text-lg font-bold text-gray-100 bg-green-600">' . self::STATUS_PHOTO_AUTOMATIC_APPROVED_NAME . '</span>';
    const STATUS_PHOTO_REJECTTED_TAG = '<span class="inline-block rounded-full px-3 py-1 text-lg font-bold text-gray-100 bg-red-600">' . self::STATUS_PHOTO_REJECTTED_NAME . '</span>';

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

    public static function cekIscompletedata($user_id){
        $qCekcompletedata = DB::selectOne("SELECT * FROM usertrees WHERE usertrees.user_id = :uid
                                                AND (usertrees.status_photo < :approve OR usertrees.status_photo > :automatic_approve)", [
                                                    'uid' => $user_id,
                                                    'approve' => self::STATUS_PHOTO_APPROVED,
                                                    'automatic_approve' => self::STATUS_PHOTO_AUTOMATIC_APPROVED,
        ]);

        return $qCekcompletedata ? false : true;
    }
}
