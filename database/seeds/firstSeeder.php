<?php

use Illuminate\Database\Seeder;

class firstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ownersテーブルにインサートする.
        DB::table("firsts")->insert([
            "nickname" => "test",
        ]);
    }
}
