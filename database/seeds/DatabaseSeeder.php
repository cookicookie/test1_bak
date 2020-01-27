<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(firstSeeder::class);//$this->call()に上記で作成したクラスを追加することで、Seedingの対象にできる
    }
}
