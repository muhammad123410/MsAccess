<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLimitedAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limited__authorities', function (Blueprint $table) {
            $table->id();
            $table->integer('Client_id');
            $table->string('Name_in_Austrilia');
            $table->string('Name_in_Kurdistan');
            $table->string("Property_Type");
            $table->integer('Property_No')->unique();
            $table->integer('Property_resisted_No')->unique();
            $table->string("Place_of_property");
            $table->date("Authority_issue_date");
            $table->integer("Authority_register_Number")->unique();
            $table->string("Authority_Name");
            $table->string("Created_by");
            $table->string('File');
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
        Schema::dropIfExists('limited__authorities');
    }
}
