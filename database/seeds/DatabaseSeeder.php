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
        $this->call([
            //AppPermissionSeeder::class,
            StatusSeeder::class,
            SettingSeeder::class,

            ReportValueTypeSeeder::class,
            ReportTypeSeeder::class,
            ReportTrendSeeder::class,
        ]);
    }
}
