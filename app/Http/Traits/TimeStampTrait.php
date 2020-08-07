<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait TimeStampTrait
{

    public $timestamps = true;

    public function getDates(){
        return ['created_at', 'updated_at'];
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->diffForHumans(); // 5 minutes
    }

    public function getUpdatedAtAttribute(){
        return Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}


