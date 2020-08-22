<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->char('name', 50);
            $table->char('surname', 50);
            $table->char('id_number', 15);
            $table->char('passport_number', 15);
            $table->char('car_registration', 15);
            $table->char('car_make', 15);
            $table->char('car_model', 15);
            $table->char('car_colour', 15);
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
