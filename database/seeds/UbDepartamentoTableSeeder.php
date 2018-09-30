<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UbDepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ub_departamento')->insert([
            ['nombre' => 'Departamento 1', 'slug' => str_slug('Departamento 1'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 2', 'slug' => str_slug('Departamento 2'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 3', 'slug' => str_slug('Departamento 3'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 4', 'slug' => str_slug('Departamento 4'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 5', 'slug' => str_slug('Departamento 5'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 6', 'slug' => str_slug('Departamento 6'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 7', 'slug' => str_slug('Departamento 7'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 8', 'slug' => str_slug('Departamento 8'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Departamento 9', 'slug' => str_slug('Departamento 9'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
