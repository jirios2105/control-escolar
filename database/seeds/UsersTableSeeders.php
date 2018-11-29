<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $user= factory(\App\User::class)->create([
                "name" => 'Alin',
                "email" => 'alin.mendez@gmail.com',
                "password" => bcrypt('123123'),
                "role_id" =>2

            ]);
            \App\Alumno::create([
                "nombre" => 'Alin',
                "apellido_paterno" => 'Mendez',
                "apellido_materno" => 'Castillo',
                "matricula" =>'12176171',
                "grupo_id" =>6,
                'user_id' => 1
            ]);

    	 factory(\App\User::class)->create([
                "name" => 'Erika',
                "email" => 'erika.rosas@gmail.com',
                "password" => bcrypt('123123'),
                "role_id" =>2

            ]);
           \App\Alumno::create([
                "nombre" => 'Erika',
                "apellido_paterno" => 'Rosas',
                "apellido_materno" => 'Tiro',
                "matricula" =>'1217612',
                "grupo_id" =>6,
                'user_id' => 2


            ]);
           


         
            $user= factory(\App\User::class)->create([
                "name" => 'Keny',
                "email" => 'keny.torres@gmail.com',
                "password" => bcrypt('123123'),
                "role_id" =>2

            ]);
            \App\Alumno::create([
                "nombre" => 'Keny',
                "apellido_paterno" => 'Torres',
                "apellido_materno" => 'Vera',
                "matricula" =>'12176173',
                "grupo_id" =>6,
                'user_id' => 3


            ]);


             factory(\App\User::class)->create([
                "name" => 'Administrador',
                "email" => 'admin',
                "password" => bcrypt('123123'),
                "role_id" =>1

            ]);
            
        $int = rand(1262055681, 1262055681);
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            $lastName=$faker->lastName;
            $first_surname=$faker->firstName('male');;
            $name=$faker->name;
   
           $user= factory(\App\User::class)->create([
                "name" => $name,
                "email" => $faker->email,
                "password" => bcrypt('123123'),
                "role_id" =>2

            ]);
            \App\Alumno::create([
                "nombre" => $name,
                "apellido_paterno" => $first_surname,
                "apellido_materno" => $lastName,
                "matricula" =>'1217617'.$user->id,
                "grupo_id" =>rand(1, 6),
                'user_id' => $user->id


            ]);
        }


        foreach (range(1, 20) as $index) {
            $lastName=$faker->lastName;
            $first_surname=$faker->firstName('male');;
            $phoneNumber=$faker->phoneNumber;
            $name=$faker->name;
   
            $user=factory(\App\User::class)->create([
                "name" => $name,
                "email" => $faker->email,
                "password" => bcrypt('123123'),
                "role_id" =>3


            ]);
           \App\Profesor::create([
                "nombre" => $name,
                "apellido_paterno" => $first_surname,
                "apellido_materno" => $lastName,
                "matricula" =>'1217617'.$user->id,
                'user_id' => $user->id


            ]);
        }
    }
}
