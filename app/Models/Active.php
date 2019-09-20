<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Active extends BaseModel
{
    //
    public function prizeConfig(){
        return $this->hasMany('App\Models\Prize','active_id','id');
    }
    /**
     * 微信商户
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function merchant(){
        return $this->belongsTo('App\Models\WxMerchant','wx_merchant_id','id');
    }
}
