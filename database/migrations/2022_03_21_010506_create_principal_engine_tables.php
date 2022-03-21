<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalEngineTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_user_id')->nullable()->default(null);
            $table->unsignedBigInteger('updated_user_id')->nullable()->default(null);
            $table->unsignedBigInteger('deleted_user_id')->nullable()->default(null);
            $table->char('tipe_id',4)->default('0');
            $table->char('tipe2_id',4)->default('0');
            $table->string('feacture_1', 512)->nullable()->comment('en este campo se guardara el color de los productos, en el caso de servicios, se guardara el titulo del servicio');
            $table->string('feacture_2', 512)->nullable()->comment('en este campo se guardara la ruta de la foto del producto, en el caso de servicios, se guardara la descripcion secundara del servicio');
            $table->string('feacture_3', 512)->nullable();
            $table->string('feacture_4', 512)->nullable();
            $table->string('feacture_5', 512)->nullable();
            $table->string('feacture_6', 512)->nullable();
            $table->string('feacture_7', 512)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->char('tipe_id',4)->default('0');
            $table->string('description', 512)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('parametrics', function (Blueprint $table) {
            $table->id();
            $table->char('value', 4);
            $table->string('description');
            $table->string('group');
            $table->string('conector',100)->nullable()->default(null);
            $table->string('slug', 150)->nullable()->default(null);
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

    }
}
