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
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 150)->nullable()->comment('Almacena el nombre de la marca');
            $table->string('acronym', 30)->nullable()->comment('Almacena la sigla de la marca');
            $table->string('logo', 512)->nullable()->comment('Guarda la ruta del logo corporativo de la marca');
            $table->string('slug', 30)->nullable()->comment('Es el sufigo de abreviado para navegadores de la marca');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('parametrics', function (Blueprint $table) {
            $table->id();
            $table->char('value', 4)->comment('Valor del parametro normlamente el subId');
            $table->string('description')->comment('descripciond el parametro');
            $table->string('group')->comment('grupo o tabla virtual qw se guarda');
            $table->string('conector',100)->nullable()->default(null)->comment('auxiliar de la tabla');
            $table->string('slug', 150)->nullable()->default(null)->comment('sufijo abreviado dle parametro para navegadores');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('brand_has_categorys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('brand_id')->nullable()->default(null);
            $table->unsignedBigInteger('category_id')->nullable()->default(null);
            $table->foreign('brand_id')
                    ->references('id')
                    ->on('brands')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('category_id')
                    ->references('id')
                    ->on('parametrics')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_user_id')->nullable()->default(null)->comment('Id del usuario que creo el articulo');
            $table->unsignedBigInteger('updated_user_id')->nullable()->default(null)->comment('Id del usuario que actualizo el articulo');
            $table->unsignedBigInteger('deleted_user_id')->nullable()->default(null)->comment('Id del usuario que borro el articulo');
            $table->char('brand_category_id',4)->default('0');
            $table->string('name', 512)->nullable()->comment('almacena el nombre del articulo');
            $table->string('description', 512)->nullable()->comment('Este campo guarda la descripcion del articulo');
            $table->longText('features')->nullable()->comment('Este campo guarda las caracteristicas del articulo');
            $table->decimal('price', 10, 2)->nullable()->comment('Se guarda el precio del articulo');
            $table->string('code', 20)->nullable()->comment('almacena el codigo unico dle articulo');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('updated_user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('deleted_user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->default(0);
            $table->char('tipe_id',4)->default('0');
            $table->string('description', 512)->nullable();
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
