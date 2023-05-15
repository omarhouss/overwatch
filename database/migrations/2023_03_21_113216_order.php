<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('rank');
            $table->string('currentrank');
            $table->string('desiredrank');
            $table->integer('currentnumber');
            $table->integer('desirednumber');
            $table->integer('wins');
            $table->string('platform');
            $table->string('role');
            $table->string('server');
            $table->decimal('total_price', 8, 2);
            $table->string('service');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
