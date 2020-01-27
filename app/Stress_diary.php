<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stress_diary extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'stress', 'happiness', 'emotion', 'productivity', 'source_of_stress', 'body_reaction', 'response_level',
    ];
    protected $table = 'stress_diarys';
}


