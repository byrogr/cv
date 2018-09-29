<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use \Illuminate\Support\Facades\Hash;
use App\User;


class UsUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'usuario' => 'admin',
            'email' => 'admin@cv.com',
            'password' => Hash::make('12345'),
            'rol_id' => 1,
            'nombres' => 'Admin',
            'apellidos' => 'Admin',
            'usrreg' => null,
            'usract' => null,
            'remember_token' => null,
        ));

        User::create(array(
            'usuario' => 'proveedor',
            'email' => 'proveedor@cv.com',
            'password' => Hash::make('12345'),
            'rol_id' => 1,
            'nombres' => 'Proveedor',
            'apellidos' => 'Proveedor',
            'usrreg' => null,
            'usract' => null,
            'remember_token' => null,
        ));

        User::create(array(
            'usuario' => 'cliente',
            'email' => 'cliente@cv.com',
            'password' => Hash::make('12345'),
            'rol_id' => 1,
            'nombres' => 'Cliente',
            'apellidos' => 'Cliente',
            'usrreg' => null,
            'usract' => null,
            'remember_token' => null,
        ));
    }
}
