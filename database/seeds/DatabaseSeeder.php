<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(institutionstableseeder::class);
        $this->call(rolestableseeder::class);
        $this->call(structunitstableseeder::class);
        $this->call(RoleUserJob::class);
        $this->call(RequirementTableSeeder::class);    
    }
}
