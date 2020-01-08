<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "korisnik",
            'email' => 'korisnik@gmail.com',
            'role'=>'korisnik',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "konobar",
            'email' => 'konobar@gmail.com',
            'role'=>'konobar',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "kuhar",
            'email' => 'kuhar@gmail.com',
            'role'=>'kuhar',
            'password' => bcrypt('password'),
        ]);
    }
}
