<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_id')->unsigned()->nullable();
            $table->unsignedBigInteger('brand_id')->unsigned()->nullable();
            $table->string('nama');
            $table->float('stock')->nullable();
            $table->timestamps();

            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
        
            $table->foreign('brand_id')->references('id')->on('brand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stoks');
    }
}
