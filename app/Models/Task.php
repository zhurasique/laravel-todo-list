<?php

namespace App\Models;

use App\Http\Traits\TimeStampTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimeStampTrait;
    protected $table = "tasks";
}
