<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->char('status', 20);
            $table->dateTime('completed_at');
            $table->integer('client_id'); 
            $table->integer('user_id');   
            $table->integer('branch_id');  
            $table->integer('company_id');              
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
        Schema::dropIfExists('bookings');
    }
}
