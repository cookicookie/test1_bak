<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Act_value extends Model
{
    protected $fillable = [
        'importance', 'success', 'explanation',
    ];
    protected $table = 'act_values';

}