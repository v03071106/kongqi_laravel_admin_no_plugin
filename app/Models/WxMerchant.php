<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WxMerchant extends BaseModel
{
    //
    public static function getAll(){
        return self::where('is_checked',1)->get()->toArray();
    }
}
