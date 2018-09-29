<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('us_rol')->insert([
            ['nombre' => 'Administrador', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Proveedor', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Cliente', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
