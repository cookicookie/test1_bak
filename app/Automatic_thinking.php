<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automatic_thinking extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'environment', 'thoughts_images', 'emotions_mood', 'body_reaction', 'action',
    ];
    protected $table = 'automatics';
}