<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('income_id');
            $table->integer('income_type_id');
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->double('worth','11','2');
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
        Schema::dropIfExists('income_logs');
    }
}
