<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('level',100);
            $table->text('description',1000);
            $table->integer('category_id');
            $table->integer('company_id');
            $table->string('duration_month'); 
            $table->date('start_date');
            $table->date('end_date');
            $table->string('shift');
			$table->integer("votes")->default(0);
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
        Schema::dropIfExists('programs');

    }
}
