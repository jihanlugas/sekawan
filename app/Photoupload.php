<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photoupload extends Model
{
    protected $guarded = [];

    public $directory = 'uploads';

    const FILE_DIRECTORY = 'uploads';

    public function usertree()
    {
        return $this->hasOne('App\Usertree');
    }

    public static function getFilepath($id){
        $mPhotoupload = Photoupload::where('id', $id)->first();
        if (!empty($mPhotoupload)){
            return '/' . self::FILE_DIRECTORY . '/' . $mPhotoupload->alt_file;
        }else{
            return false;
        }
    }
}
