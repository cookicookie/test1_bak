<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
  protected $fillable = [// name, kana,カラムにデータの挿入を許可する
          'contents',
      ];
}
