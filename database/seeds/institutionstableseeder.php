<?php

use Illuminate\Database\Seeder;

class institutionstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Institutions')->insert([
            'name'=>'Ugra State University',
            'description'=>'Это университет СуперАдмина'
        ]);
    }
}
