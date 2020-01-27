<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emotion extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'vocabulary', 'mean',

    ];
    protected $table = 'emotions';
}

