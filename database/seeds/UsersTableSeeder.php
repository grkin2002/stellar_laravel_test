<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        App\User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('123456'),
            ]);

        App\User::create([
            'name'=>'stellar',
            'email'=>'stellar@gmail.com',
            'password' => Hash::make('123456'),
            ]);

        App\User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password' => Hash::make('123456'),
            ]);
    }
}
