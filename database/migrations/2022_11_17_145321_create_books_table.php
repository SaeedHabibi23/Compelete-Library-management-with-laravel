<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id')->id()->unsigned();
            $table->string('BookNumberImage' ,128)->nullable();
            $table->string('BookName' , 128);

            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('cat_id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
           

            $table->integer('NOPage');
            $table->string('BookLanguage' , 64);
            $table->string('Author1' , 128);
            $table->string('Author2' , 128)->nullable();
            $table->string('Author3' , 128)->nullable();
            $table->integer('BookQuantity');
            $table->integer('Jeld');
            $table->integer('Print_Year')->nullable();
            $table->string('BookTranslator' , 128)->nullable();
            $table->string('BookPlace' , 2);
            $table->string('BookNumberAsPlace' , 3)->nullable();
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
        Schema::dropIfExists('books');
    }
}
