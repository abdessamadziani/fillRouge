<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class NorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       \App\Models\NorUser::factory(10)->create();


        // DB::table('nor_users')->insert([
        //     'name'=>Str::random(5),
        //     'user_type'=>'seeker',
        //     'email'=>Str::random(4).'@gmail.com',
        //     'email_verified_at'=>now(),
        //     'password'=>Hash::make('password'),
        //     'remember_token'=>Str::random(10)

        // ]);
    }
}
