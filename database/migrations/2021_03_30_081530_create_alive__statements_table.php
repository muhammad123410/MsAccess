<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliveStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alive__statements', function (Blueprint $table) {
            $table->id();
            $table->integer('Client_id');
            $table->string('Name_in_Austrilia');
            $table->date("Authority_issue_date");
            $table->string("Country_Name");
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
        Schema::dropIfExists('alive__statements');
    }
}
