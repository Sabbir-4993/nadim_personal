<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nadim',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'designation' => 'Graphics Designer',
            'bio' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. Wikipedia',
            'image' => 'nadim.jpg',
            'updated_at'=> '2021-02-23 11:18:31',
        ]);
    }
}

