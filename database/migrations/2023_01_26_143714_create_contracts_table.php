<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client_id")->constrained();
            $table->foreignId("plan_id")->constrained();

            $table->boolean("contract_status")->default(true);
            $table->string("ip")->nullable()->unique();
            $table->boolean("service_status")->default(false);
            $table->string("pppoe_username")->nullable();
            $table->string("pppoe_password")->nullable();
            $table->string("notes")->nullable();
            $table->string("name")->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
