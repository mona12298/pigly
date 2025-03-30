<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => '田中花子',
        'email' => 'asdfghj12345@hijk.com',
        'password' => 'password12345'
        ];
        DB::table('users')->insert($param);
    }
}
