<?php

namespace App\Http\Traits;

use App\Price;
use App\User;
use App\Usertree;

trait UsertreeTrait
{
    public function generateUsertree($id){
        $mUser = User::where('id', $id)->first();
        if ($mUser){
            $level = 1;
            $mUseradmin = User::where('id', Usertree::ADMIN_ID)->first();
            $mPrice = Price::where('is_active', 1)->first();

            $mUsertree = new Usertree();
            $mUsertree->user_id = $mUser->id;
            $mUsertree->parent_id = $mUseradmin->id;
            $mUsertree->parent_level = Usertree::ADMIN_LEVEL;
            $mUsertree->price_id = $mPrice->id;
            $mUsertree->save();

            $mParentusertrees = Usertree::where('user_id', $mUser->request_by)
                ->where('parent_level', '!=', 0)
                ->orderBy('parent_level', 'asc')
                ->limit(Usertree::USERTREE_LEVEL_LIMIT)
                ->get();

            foreach ($mParentusertrees as $i => $mParentusertree){
                if (count($mParentusertrees) >= Usertree::USERTREE_LEVEL_LIMIT){
                    if ($i){
                        $mUsertree = new Usertree();
                        $mUsertree->user_id = $id;
                        $mUsertree->parent_id = $mParentusertree->parent_id;
                        $mUsertree->parent_level = $level;
                        $mUsertree->price_id = $mPrice->id;
                        $mUsertree->save();

                        $level = $level + 1;
                        if ($level > Usertree::USERTREE_LEVEL_LIMIT - 1)
                            break;
                    }
                }else{
                    $mUsertree = new Usertree();
                    $mUsertree->user_id = $id;
                    $mUsertree->parent_id = $mParentusertree->parent_id;
                    $mUsertree->parent_level = $level;
                    $mUsertree->price_id = $mPrice->id;
                    $mUsertree->save();

                    $level = $level + 1;
                    if ($level > Usertree::USERTREE_LEVEL_LIMIT - 1)
                        break;
                }
            }

            $mUsertree = new Usertree();
            $mUsertree->user_id = $mUser->id;
            $mUsertree->parent_id = $mUser->request_by;
            $mUsertree->parent_level = $level;
            $mUsertree->price_id = $mPrice->id;
            $mUsertree->save();
        }
    }

}
