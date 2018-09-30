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
            ['nombre' => 'Lambayeque', 'slug' => str_slug('Departamento 1'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'La Libertad', 'slug' => str_slug('Departamento 2'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Amazonas', 'slug' => str_slug('Departamento 3'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Cajamarca', 'slug' => str_slug('Departamento 4'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'San Martin', 'slug' => str_slug('Departamento 5'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Ancash', 'slug' => str_slug('Departamento 6'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Tumbes', 'slug' => str_slug('Departamento 7'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Piura', 'slug' => str_slug('Departamento 8'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Amazonas', 'slug' => str_slug('Departamento 9'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
