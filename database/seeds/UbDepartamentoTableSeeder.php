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
            ['nombre' => 'Lambayeque', 'slug' => str_slug('Lambayeque'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'La Libertad', 'slug' => str_slug('La Libertad'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Amazonas', 'slug' => str_slug('Amazonas'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Cajamarca', 'slug' => str_slug('Cajamarca'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'San Martin', 'slug' => str_slug('San Martin'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Ancash', 'slug' => str_slug('Ancash'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Tumbes', 'slug' => str_slug('Tumbes'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Piura', 'slug' => str_slug('Piura'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'Amazonas', 'slug' => str_slug('Amazonas'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
