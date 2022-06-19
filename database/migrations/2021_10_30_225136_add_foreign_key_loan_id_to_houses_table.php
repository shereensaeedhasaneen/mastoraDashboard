<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyLoanIdToHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->bigInteger('loan_id')->unsigned()->nullable();
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('SET NULL');        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->dropForeign('houses_loan_id_foreign');
            $table->dropColumn('loan_id');
        });
    }
}
