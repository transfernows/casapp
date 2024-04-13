<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('web_user_tbl')->insert([
                'name' => 'heyder',
                'email' => 'heyder@heyder.com',
                'password' => Hash::make('123456')
        ]);
    }
}

