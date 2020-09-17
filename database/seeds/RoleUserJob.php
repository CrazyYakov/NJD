<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class RoleUserJob extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'gitarar98@yandex.ru',
            'password'=>Hash::make('123456')
        ]);
        DB::table('role-user-job')->insert([
            'user_id'=>'1',
            'role_id'=>'4',
            'job_id'=>'1',
        ]);
    }
}
