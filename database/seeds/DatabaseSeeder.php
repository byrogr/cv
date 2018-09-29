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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('us_rol')->truncate();
        DB::table('us_usuario')->truncate();
        DB::table('se_servicio')->truncate();
        DB::table('in_inventario')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->call([
            UsRolTableSeeder::class,
            UsUsuarioTableSeeder::class,
            SeServicioTableSeeder::class,
            InInventarioTableSeeder::class
        ]);
    }
}
