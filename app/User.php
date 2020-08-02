<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    use Notifiable;

    const USER_REQUEST_LIMIT = 8;

    const USER_INVITATION_CD_CHARACTER = 6;

    const USER_PRICE_SEEDER_NON_ADMIN = 25000; // Rp 25.000

    const USER_PRICE_SEEDER_ADMIN = 25000; // Rp 25.000

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'birth_dt', 'password', 'request_by', 'is_complete', 'invitation_cd'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function usertree()
//    {
//        return $this->hasMany('App\Usertree');
//    }

    public function userdetail()
    {
        return $this->hasOne('App\Userdetail');
    }

    public static function generateInvitationcd()
    {
        $cd = Str::random(self::USER_INVITATION_CD_CHARACTER);
        $mUser = User::where('invitation_cd', $cd)->first();
        echo $cd;
        if (empty($mUser)){
            return $cd;
        }else{
            redirect(self::generateInvitationcd());
        }

    }
}
