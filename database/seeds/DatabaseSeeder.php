<?php

use Illuminate\Database\Seeder;
use PanicHD\PanicHD\Seeds\Basic;
use PanicHD\PanicHD\Seeds\DemoDataSeeder;
use PanicHD\PanicHD\Seeds\SettingsTableSeeder;

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
        $this->call([
            UsersTableSeeder::class,
            SettingsTableSeeder::class,
            DemoDataSeeder::class,
            Basic::class,
        ]);
    }
}
