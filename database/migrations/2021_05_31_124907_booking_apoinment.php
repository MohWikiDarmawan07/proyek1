<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingApoinment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book',function(Blueprint $table){
            $table->id();
            $table->String('Nama',40);
            $table->String('Email',40);
            $table->char('Day',10);
            $table->time('Time');
            $table->String('Dokter',40);
            $table->text('Keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
