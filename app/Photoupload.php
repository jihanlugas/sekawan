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
            return '/' . self::FILE_DIRECTORY . '/' . $mPhotoupload->file_name;
        }else{
            return false;
        }
    }

    public static function uploadPhoto($request, $ref_id)
    {
        $directory = 'uploads';

        $data = new Photoupload();
        $data->ref_type = 1;
        $data->ref_id = $ref_id;
        $data->folder_name = $directory;
        $data->file_name = str_replace(' ', '-', $request->getClientOriginalName());
        $data->alt_file = $request->getClientOriginalName();
        $data->ext_file = $request->getClientOriginalExtension();
        $data->size = $request->getSize();
        $path = $request->move($data->folder_name, $data->file_name);
        $dataPath = getimagesize($path);
        $data->width = $dataPath[0];
        $data->height = $dataPath[1];
        $data->save();

        return $data->id;
    }
}
