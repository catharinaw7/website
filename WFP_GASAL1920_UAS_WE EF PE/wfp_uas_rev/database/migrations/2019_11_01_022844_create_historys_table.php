<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengeluarans_id')->unsigned();
            $table->foreign('pengeluarans_id')->references('id')->on('pengeluarans');
            $table->integer('pemasukans_id')->unsigned();
            $table->foreign('pemasukans_id')->references('id')->on('pemasukans');
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
        Schema::dropIfExists('historys');
    }
}
