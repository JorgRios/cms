<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->comment('en este campo se guarda el nombre de usuario de los usuarios');
            $table->string('name')->comment('en este campo se guarda el nombre de usuario');
            $table->char('depatment_id',4)->default('0')->comment('en este campo se guarda el identificador del departamento');
            $table->string('email')->unique()->comment('en este campo se guarda el email del usuario');
            $table->string('phone', 50)->nullable()->comment('en este campo se guarda el numero de contacto del usuario');
            $table->text('adress')->nullable()->comment('en este campo se guarda la direccion del usuario');
            $table->timestamp('email_verified_at')->nullable()->comment('en este campo se guarda el tiempo en el que fue creado el email');
            $table->string('password')->comment('en este campo se guarda la contrasena del usuario');
            $table->rememberToken()->comment('en este campo se guarda los moviemientos realizados por el usuario');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
