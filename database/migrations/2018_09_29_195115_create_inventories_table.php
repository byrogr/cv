<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_inventario', function (Blueprint $table)
        {

            $table->increments('id');

            $table->integer('servicio_id')
                ->unsigned()
                ->nullable(false)
                ->comment('Relación con la table de servicio');

            $table->string('estado')
                ->nullable(false)
                ->comment('Estado de disponibilidad');

            $table->string('fecha')
                ->nullable(true)
                ->comment('Fecha del servicio');

            $table->integer('cupos')
                ->nullable(false)
                ->comment('Diponibilidad de servicio');

            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->foreign('servicio_id')->references('id')->on('se_servicio');

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
        Schema::dropIfExists('in_inventario');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
