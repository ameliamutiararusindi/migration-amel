<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutModulEvents;
use illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(
            [
                'name'        => Str::random(10). 'amel',
                'email'       => Str::random(10). '@example.com',
                'password'    => Hash::make('password'). 'amel09886',
            ]
        );

    }
}
