<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Inventario;

class InInventarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventario::create(array(
            'servicio_id' => 1,
            'estado' => 'A',
            'fecha' => Carbon::now()->addDay(1)->format('Y-m-d'),
            'cupos' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Inventario::create(array(
            'servicio_id' => 1,
            'estado' => 'A',
            'fecha' => Carbon::now()->addDay(2)->format('Y-m-d'),
            'cupos' => 24,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Inventario::create(array(
            'servicio_id' => 1,
            'estado' => 'A',
            'fecha' => Carbon::now()->addDay(3)->format('Y-m-d'),
            'cupos' => 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Inventario::create(array(
            'servicio_id' => 2,
            'estado' => 'A',
            'fecha' => Carbon::now()->addDay(1)->format('Y-m-d'),
            'cupos' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        Inventario::create(array(
            'servicio_id' => 2,
            'estado' => 'A',
            'fecha' => Carbon::now()->addDay(2)->format('Y-m-d'),
            'cupos' => 8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));
    }
}
