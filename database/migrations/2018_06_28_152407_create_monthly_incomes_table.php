<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month');
            $table->double('sales','10','2');
            $table->double('bonuses','10','2');
            $table->double('investment','10','2');
            $table->double('profit','10','2');
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
        Schema::dropIfExists('monthly_incomes');
    }
}
