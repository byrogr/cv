<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('us_usuario', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('usuario', 50)
                ->nullable(false)
                ->unique()
                ->comment('Nombre de usuario');

            $table->string('email',80)
                ->unique()
                ->nullable(false)
                ->comment('Correo del usuario');

            $table->string('password')
                ->nullable(false)
                ->comment('Contraseña del usuario');

            $table->string('nombres', 50)
                ->nullable(false)
                ->comment('Nombres del usuario');

            $table->string('apellidos', 50)
                ->nullable(true)
                ->comment('Apellidos del usuario');

            $table->string('usrreg', 50)
                ->nullable(true)
                ->comment('Usuario de creación del registro');

            $table->string('usract', 50)
                ->nullable(true)
                ->comment('Usuario de actualización del registro');

            $table->rememberToken();

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
        Schema::dropIfExists('us_usuario');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
