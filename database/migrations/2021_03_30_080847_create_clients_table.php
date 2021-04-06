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
            $table->string('Client_Name');
            $table->string('Address');
            $table->string('Contact_Number')->unique();
            $table->string('Type_of_Iraqi');
            $table->string('Iraqi_Document_number');
            $table->string("Type_of_Australian_id");
            $table->string("Australian_Id_No");
            $table->date("Date_of_issue");
            $table->string("Created_by");



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
