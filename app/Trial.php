<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'defendant', 'defense', 'prosecution', 'jury', 'judgment',
    ];
    protected $table = 'trials';
}