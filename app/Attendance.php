<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // id, created_at 以外のカラムを更新可能とする
    protected $fillable = [
        'name',
        'email',
        'body',
        'flagged_at',
        'updated_at',
      ];
}
