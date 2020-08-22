<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalAidDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_aid_details', function (Blueprint $table) {
            $table->id();
            $table->char('provider', 25);
            $table->char('plan', 50);
            $table->char('number', 15);
            $table->boolean('is_main_member');
            $table->integer('client_id');
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
        Schema::dropIfExists('medical_aid_details');
    }
}
