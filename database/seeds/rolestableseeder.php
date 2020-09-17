<?php

use Illuminate\Database\Seeder;

class rolestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=>'user'
        ]);
        DB::table('roles')->insert([
            'name'=>'moderator'
        ]);
        DB::table('roles')->insert([
            'name'=>'Admin'
        ]);
        DB::table('roles')->insert([
            'name'=>'superAdmin'
        ]);
    }
}
