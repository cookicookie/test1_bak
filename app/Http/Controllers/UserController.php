<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
  public function index()
{
  $user = new User;
  $user->name = '山田　太郎';
  $user->email = 'yamada@yahoo.co.jp';
  $user->password = '26';
  $user->save();
}
}



//public function index ()
//{
//  $users = user::all();
//return view ('club_member_done', compact('users'));
