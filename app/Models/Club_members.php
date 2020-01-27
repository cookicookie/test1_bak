<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club_members extends Model
{
  use SoftDeletes;
  protected $table = 'club_members';
  protected $dates = ['deleted_at'];
}
