<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('referral','11','2');
            $table->double('paired','11','2');
            $table->double('paired_bonus','11','2');
            $table->double('gold_rush','11','2');
            $table->double('treasure_bank','11','2');
            $table->double('total','11','2');
            $table->double('coin_wallet','11','2');
            $table->integer('income_log_id');
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
        Schema::dropIfExists('member_incomes');
    }
}
