<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('se_servicio', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombre')
                ->nullable(false)
                ->comment('Nombre de servicio');

            $table->text('descripcion')
                ->nullable(true)
                ->comment('descripcion de servicio');

            $table->integer('duracion')
                ->nullable(false)
                ->comment('Duracion de servicio');

            $table->string('inicio')
                ->nullable(false)
                ->comment('Hora de inicio del servicio');

            $table->string('fin')
                ->nullable(false)
                ->comment('Hora de fin del servicio');

            $table->decimal('precio', 10,2)
                ->nullable(false)
                ->comment('Precio del servicio');

            $table->integer('rank')
                ->nullable(false)
                ->comment('Ranking del servicio');

            $table->string('video')
                ->nullable(false)
                ->comment('Codigo de video servicio');

            $table->string('proveedor')
                ->nullable(true)
                ->comment('Nombre del proveedor');

            $table->string('localidad')
                ->nullable(true)
                ->comment('Nombre de la localidad');

            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('se_servicio');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
