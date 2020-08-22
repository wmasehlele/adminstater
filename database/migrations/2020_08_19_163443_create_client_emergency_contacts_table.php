<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->char('name', 50);
            $table->char('surname', 50);
            $table->char('cellphone', 15);
            $table->char('email', 100);
            $table->char('address', 15);
            $table->char('relationship', 15);
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
        Schema::dropIfExists('client_emergency_contacts');
    }
}
