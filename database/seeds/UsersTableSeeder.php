<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        for($i=1;$i<=10; $i++){
            DB::table('users')->insert([
                'name' => 'user '. $i,
                'email' => 'user'.$i.'@mail.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
