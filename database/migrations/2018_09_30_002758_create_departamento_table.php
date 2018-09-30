<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ub_departamento', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombre')
                ->nullable(false)
                ->comment('Nombre del departamento');

            $table->string('slug')
                ->nullable(false)
                ->comment('');

            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        Schema::table('se_servicio', function($table)
        {
            $table->integer('departamento_id')
                ->after('proveedor')
                ->unsigned()
                ->comment('');

            $table->foreign('departamento_id')->references('id')->on('ub_departamento');
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
        Schema::dropIfExists('ub_departamento');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
