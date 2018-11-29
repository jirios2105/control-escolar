<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create([
    		'name' => 'admin',
            'display_name' => 'Administrador',
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=> Carbon\Carbon::now()
        ]);
    	\App\Role::create([
    		'name' => 'student',
           'display_name' => 'Estudiante',
          
           'created_at'=>Carbon\Carbon::now(),
           'updated_at'=> Carbon\Carbon::now()
       ]);
    	\App\Role::create([
    		'name' => 'profesor',
           'display_name' => 'Profesor',
           
           'created_at'=>Carbon\Carbon::now(),
           'updated_at'=> Carbon\Carbon::now()
       ]);
    }
}
