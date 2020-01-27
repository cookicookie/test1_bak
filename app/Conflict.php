<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conflict extends Model
{
    protected $fillable = [
        'act_merit', 'act_demerit', 'not_act_merit', 'not_act_demerit',
    ];
    protected $table = 'conflicts';
}

