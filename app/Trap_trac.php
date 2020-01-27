<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trap_trac extends Model
{
    protected $fillable = [// name, kana,カラムにデータの挿入を許可する
        'trap_trigger', 'trap_res', 'trap_avoidance', 'trap_avoidance_sohrt', 'trap_avoidance_long', 'trac_trigger', 'trap_coping', 'trap_coping_short', 'trap_coping_long', 'trac_res',
    ];
    protected $table = 'trap_tracs';
}