<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learn extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'goal_setting', 'important', 'disability', 'deal',
    ];
    protected $table = 'ups';
}
