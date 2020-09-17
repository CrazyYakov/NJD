<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class structunitstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('struct_units')->insert([
            'name'=>'отдел внедрения и сопровождения ИС',
            'description'=>'Это подразделение СуперАдмина',
            'inst_id'=>'1'
        ]);
        
        DB::table('jobs')->insert([
            'name'=>'технический специалист по ИС',
            'description'=>'Это работа СуперАдмина',
            'level'=>'1',
            'su_id'=>'1'
        ]);
    }
}
