<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photoupload extends Model
{
    protected $guarded = [];


    const FILE_DIRECTORY = 'uploads';

    const REF_TYPE_TABLE_USERTREES = 1;

//    public function usertree()
//    {
//        return $this->hasOne('App\Usertree');
//    }

    public static function getFilepath($id)
    {
        $mPhotoupload = Photoupload::where('id', $id)->first();
        if (!empty($mPhotoupload)) {
            return asset($mPhotoupload->file_path);
        } else {
            return false;
        }
    }

    public static function uploadPhoto($request, $ref_id, $ref_type = 0)
    {
        $mUploadinc = Uploadinc::getUploadinctoupload($ref_type);
        Uploadinc::runningInc($ref_type);

        $data = new Photoupload();
        $data->ref_type = $ref_type;
        $data->ref_id = $ref_id;
        $data->folder_name = $mUploadinc->folder_name;
        $data->file_name = str_replace(' ', '-', $request->getClientOriginalName());
        $data->alt_file = $request->getClientOriginalName();
        $data->ext_file = $request->getClientOriginalExtension();
        $data->file_path = $data->folder_name . '/' . $data->file_name;
        $data->size = $request->getSize();
        $path = $request->move($data->folder_name, $data->file_name);
        $dataPath = getimagesize($path);
        $data->width = $dataPath[0];
        $data->height = $dataPath[1];

        $data->save();

        return $data->id;
    }

    public static function deletePhoto($id)
    {
        $mPhotoupload = Photoupload::where('id', $id)->first();
        if (!empty($mPhotoupload)) {
            $image_path = asset(asset($mPhotoupload->file_path));
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }
    }
}
