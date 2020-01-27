<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $fillable = [
           'name', 'email', 'password',
       ];

}

class UserRepository
{
    public functions insertUser() {
        // Userのmodelクラスのインスタンスを生成
        $user = new User();

　　　　　　　　　　　　　　　　// データベースに値をinsert
        $user->create([
            'name' => 'testname',
            'email' => 'mail@test.com',
            'password' => 'testpassword',
        ]);
    }
}
