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
        Schema::create('roles_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('descripcionRol',20);
        });
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rol_id')->references('id')->on('roles_usuario')->onDelete('cascade');
            $table->string('nombreUsuario',50);
            $table->string('apellidoUsuario',50);
            $table->string('direccion',300);
            $table->string('cedula',10)->unique();
            $table->string('contraseña',50);
            $table->string('email',80)->unique();
            $table->string('telefonoMovil',10);
            $table->string('orcid',30)->nullable();
            $table->string('filiacion',100)->nullable();
            $table->string('lineaInvestigacion',100)->nullable();
            $table->string('grupoInvestigacion',100)->nullable();
            $table->string('redInvestigacion',100)->nullable();
            $table->string('semilleroInvestigacion',100)->nullable();
        });
        Schema::create('producciones_cientificas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->string('nombreProduccion',100);
            $table->string('coAutor',100);
            $table->string('descripcion',300);
            $table->date('fecha');
        });
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produccion_id')->references('id')->on('producciones_cientificas')->onDelete('cascade');
            $table->string('isbn',13);
            $table->string('issn',10);
            $table->string('editorial',50);
            $table->string('categoria',50);
            $table->integer('volumen');
            $table->integer('paginas');
            $table->integer('capitulos');
            $table->string('referencia',50);
            $table->string('idioma',50);
            $table->date('fechaPresentacion');
            $table->date('fechaAceptacion');
        });
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produccion_id')->references('id')->on('producciones_cientificas')->onDelete('cascade');
            $table->string('codigoProyecto',13);
            $table->string('area',40);
            $table->string('direccionProyecto',50);
            $table->string('lineaInvestigacion',50);
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->decimal('costo',6,2);
        });
        Schema::create('capitulosLibro', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produccion_id')->references('id')->on('producciones_cientificas')->onDelete('cascade');
            $table->string('isbn',13);
            $table->string('issn',10);
            $table->string('editorial',50);
            $table->string('categoria',50);
            $table->integer('volumen');
            $table->integer('paginas');
            $table->integer('capitulos');
            $table->string('referencia',50);
            $table->string('idioma',50);
            $table->date('fechaPresentacion');
            $table->date('fechaAceptacion');
        });
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produccion_id')->references('id')->on('producciones_cientificas')->onDelete('cascade');
            $table->string('doi',32);
            $table->string('nombreRevista',50);
            $table->integer('nivelFiabilidad');
            $table->string('issn',10);
            $table->integer('volumen');
            $table->integer('numeroRevista');
            $table->integer('pagina');
            $table->date('fechaPresentacion');
            $table->date('fechaAceptacion');
            $table->string('refencia',50);
            $table->string('regionInvetigacion',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
