<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    protected $fillable = [
        'nickname',
    ];
    protected $table = 'firsts';
}
