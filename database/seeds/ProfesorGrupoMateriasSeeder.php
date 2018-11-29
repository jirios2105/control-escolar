<?php

use Illuminate\Database\Seeder;

class ProfesorGrupoMateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\profesor_grupo_materia::create([
                "grupo_id" => 2,
                "profesor_id" => 3,
                "materia_id" => 3,
                
            ]);
         \App\profesor_grupo_materia::create([
                "grupo_id" => 2,
                "profesor_id" => 1,
                "materia_id" => 3,
                
            ]);
          \App\profesor_grupo_materia::create([
                "grupo_id" => 2,
                "profesor_id" => 1,
                "materia_id" => 1,
                
            ]);
          \App\profesor_grupo_materia::create([
                "grupo_id" => 1,
                "profesor_id" => 1,
                "materia_id" => 2,
                
            ]);
          \App\profesor_grupo_materia::create([
                "grupo_id" => 1,
                "profesor_id" => 1,
                "materia_id" => 1,
                
            ]);

          \App\profesor_grupo_materia::create([
                "grupo_id" => 6,
                "profesor_id" => 1,
                "materia_id" => 4,
                
            ]);

          \App\profesor_grupo_materia::create([
                "grupo_id" => 6,
                "profesor_id" => 1,
                "materia_id" => 1,
                
            ]);

          \App\profesor_grupo_materia::create([
                "grupo_id" => 6,
                "profesor_id" => 3,
                "materia_id" => 1,
                
            ]);
    }
}
