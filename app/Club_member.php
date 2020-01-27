<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club_member extends Model
{
  protected $fillable = [// name, kana,カラムにデータの挿入を許可する
          'name', 'kana', 'birth_year', 'birth_day', 'postal_code', 'tel', 'pref_type', 'city', 'adress', 'other',
      ];
}
