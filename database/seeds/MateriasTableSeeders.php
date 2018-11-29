<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Materia::create([
                "nombre" => 'Matematicas',
                "codigo" => 'Mat',
                
            ]);

        \App\Materia::create([
                "nombre" => 'Inglés 1',
                "codigo" => 'ing1',
                
            ]);
       \App\Materia::create([
                "nombre" => 'Redes',
                "codigo" => 'red',
                
            ]);
       \App\Materia::create([
                "nombre" => 'Cálculo integral',
                "codigo" => 'calinte',
                
            ]);
        \App\Materia::create([
                "nombre" => 'Programación 1',
                "codigo" => 'prog1',
                
            ]);
    }
}
