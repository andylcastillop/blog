<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'name'      =>  'Pedrito Lucas',
            'email'     =>  'pedrito@gmail.com',
            'password'  =>  bcrypt('pedrito'),
            'type'      =>  'admin',
        ]);
        */

        /*
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'type' => 'admin',
        ]);
        */

        factory(App\User::class, 10)->create();
    }
}
