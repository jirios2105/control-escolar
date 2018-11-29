<?php

use Illuminate\Database\Seeder;

class GruposTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         \App\Grupo::create([
                "grupo" => 'A',
                "cuatrimestre" => 1,
                


            ]);
         \App\Grupo::create([
                "grupo" => 'E',
                "cuatrimestre" => 1,
               


            ]);
           \App\Grupo::create([
                "grupo" => 'I',
                "cuatrimestre" => 1,
                


            ]);
            \App\Grupo::create([
                "grupo" => 'A',
                "cuatrimestre" => 3,
               


            ]);
            \App\Grupo::create([
                "grupo" => 'E',
                "cuatrimestre" => 3,
           
            ]);

             \App\Grupo::create([
                "grupo" => 'I',
                "cuatrimestre" => 3,
               


            ]);
    }
}
