<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin', 
                'email' => 'admin@pdmf.com', 
                'password' => Hash::make('exemplo123'),
                'panichd_admin' => 1
            ],
            [
                'name' => 'Normal User', 
                'email' => 'user@pdmf.com', 
                'password' => Hash::make('exemplo123'),
                'panichd_admin' => 0
            ],
        ];
        User::unguard();

        foreach ($users as $user) User::updateOrCreate($user);

        User::reguard();
    }
}
