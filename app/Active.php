<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'prediction', 'rating', 'experiment', 'result', 'learn', 're_rating',
    ];
    protected $table = 'actives';
}

