<?php

namespace App\Models;

use App\Http\Traits\TasksTrait;
use App\Http\Traits\TimeStampTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimeStampTrait;
    use TasksTrait;

    public function getDates(){
        return ['created_at', 'updated_at', 'due_date'];
    }

    protected $table = "tasks";
}
