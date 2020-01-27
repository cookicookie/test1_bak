<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positive_thinking extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'positive_thinking', 'ideal_thinking', 'negative_thinking', 
    ];
    protected $table = 'positive_thinkings';
}

