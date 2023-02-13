<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_orders', function (Blueprint $table) {
            $table->id()->from(500);
            $table->integer('pv')->default(1); //punto de venta, ya que usa nomenclatura 00001-xxxxxx
            $table->foreignId('user_id');//solicitante
            $table->date('deadline')->nullable();// fecha para la cual se necesita disponer de ese material
            $table->enum('priority',['baja','media','alta']);
            $table->enum('status',['borrador','activa','cotizacion','en viaje','completada','rechazada','incompleta'])->default('borrador');
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
        Schema::dropIfExists('requirement_orders');
    }
}
