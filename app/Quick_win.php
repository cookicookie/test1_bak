<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quick_win extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'quick_win', 'difficulty', 'impact', 'total_score', 'project',
    ];
    protected $table = 'quick_wins';
}
