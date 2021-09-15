<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $path = 'database/sql/rese_db.sql';
        DB::unprepared(file_get_contents($path));

        //Herokuデプロイ時のシーディング用
        // $path = 'database/sql/rese_db_heroku.sql';
        // DB::unprepared(file_get_contents($path));

    }
}
