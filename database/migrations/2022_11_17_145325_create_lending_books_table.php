<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLendingBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lending_books', function (Blueprint $table) {
            $table->bigIncrements('lending_id')->id()->unsigned();
            $table->string('personName' , 128);
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('MountMoney');
            $table->date('date_lend');
            $table->date('date_delivery');
            $table->string('lend_description' , 512)->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('lending_books');
    }
}
