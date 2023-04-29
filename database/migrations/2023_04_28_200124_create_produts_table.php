<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produts', function (Blueprint $table) {
            $table->uuid('uuid')->primary();;
            $table->string('name');
            $table->string('barcode')->nullable();
            $table->string('description')->nullable();
            $table->string('main_unit')->nullable();
            $table->string('sub_unit')->nullable();
            $table->string('per_unit')->nullable();
            $table->string('alert_qty');
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
        Schema::dropIfExists('produts');
    }
};
