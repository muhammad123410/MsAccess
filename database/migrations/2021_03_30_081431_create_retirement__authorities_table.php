<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetirementAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retirement__authorities', function (Blueprint $table) {
            $table->id();
            $table->integer('Client_id');
            $table->string('Name_in_Austrilia');
            $table->string('Name_in_Kurdistan');
            $table->string('Mother_Full_Name');
            $table->string('Retirement_Type');
            $table->integer('Retirement_Id_No')->unique();
            $table->date('Retirement_Date_of_Issue');
            $table->string('Name_of_the_Bank');
            $table->date("Authority_issue_date");
            $table->string("Country_Name");
            $table->integer("Authority_register_Number")->unique();
            $table->string("Authority_Name");
            $table->string("Created_by");
            $table->string('File');
            $table->string('Place_of_issue');

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
        Schema::dropIfExists('retirement__authorities');
    }
}
