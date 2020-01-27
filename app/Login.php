<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
  protected $fillable = [// name, kana,カラムにデータの挿入を許可する
          'id', 'pass',
      ];
      protected $table = 'login';
}
