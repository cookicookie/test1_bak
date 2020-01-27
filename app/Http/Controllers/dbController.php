<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;

class dbController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
{


}
}
getですべて取得して表示
//$users = DB::table('users')->get();
//foreach ($users as $user):
//    echo $user->email.'<br>';
//endforeach;
//return view('club_member_done')->with('users',$users);

クエリビルダを用いたsql文
//DB::insert('insert into users (email, name) values (?, ?)', ['Abasdjfoidh', 'Dayle']);
//DB::table('users')->insert(['email' => 'dai@example.com', 'name' => 'asuka']);
//DB::table('users')
//    ->where('id', 4)
//    ->update([
//        'name' => '名前xxx2'
//    ]);
//DB::delete('delete from users WHERE id = ?' [1]);
