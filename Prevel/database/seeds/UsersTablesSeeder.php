<?php

use Illuminate\Database\Seeder;
use App\Users;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
             'name'     =>      'Gus',
             'email'    =>      'Gus@gmail.com',
             'password' =>      Hash::make('password'),
             'remember_token' => str_random(10),
        ]);
    }
}
