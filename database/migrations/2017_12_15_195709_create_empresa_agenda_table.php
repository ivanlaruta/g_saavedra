<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_agenda');
            $table->integer('id_empresa')->nullable();
            $table->string('observaciones',50)->nullable();
            $table->enum('estado',['1','0'])->default('1');
            $table->string('created_by')->nullable()->unsigned();
            $table->string('updated_by')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_agenda');
    }
}
