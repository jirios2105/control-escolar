<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            RolesTableSeeder::class,
            GruposTableSeeders::class,
            UsersTableSeeders::class,
            MateriasTableSeeders::class
            ProfesorGrupoMateriasSeeder::class

         ]);
        
    }
}
