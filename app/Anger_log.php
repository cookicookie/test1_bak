<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anger_log extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'cause_of_anger', 'reaction', 'judgment_of_reaction',
    ];
    protected $table = 'anger_logs';
}