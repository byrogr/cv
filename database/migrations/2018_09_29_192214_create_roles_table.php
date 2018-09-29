<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('us_rol', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('nombre')
                ->nullable(false)
                ->unique()
                ->comment('Roles de usuario');

            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        Schema::table('us_usuario', function($table)
        {
            $table->integer('rol_id')
                ->after('password')
                ->unsigned()
                ->comment('Rol del usuario, relacionado con la tabla ro_rol');

            $table->foreign('rol_id')->references('id')->on('us_rol');
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
        Schema::dropIfExists('us_rol');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
